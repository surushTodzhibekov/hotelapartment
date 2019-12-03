<?php 

namespace App\Enjoythetrip\Repositories;

use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface;
use App\{TouristObject,City,Room,Reservation,Article,User,Comment};

class FrontendRepository implements FrontendRepositoryInterface
{
    
    public function getObjectsForMainPage()
    {
       // return TouristObject::all();  
        return TouristObject::with('city', 'photos')->ordered()->paginate(8);
    }
    
    public function getObject($id)
    {
       // return TouristObject::find($id);
        return  TouristObject::with(['city','photos', 'address','users.photos','rooms.photos','comments.user','articles.user','rooms.object.city'])->find($id);
    }
    
    public function getSearchCities(string $term){
        return City::where('name', 'LIKE', $term . '%')->get();
    }
    
    public function getSearchResults(string $city){
        return City::with(['rooms.reservations', 'rooms.photos', 'rooms.object.photos'])->where('name', $city)->first() ?? false;
    }
    
    public function getRoom($id){
        return Room::with(['object.address'])->find($id);
    }
    
    
    public function ajaxGetRoomReservations($room_id){
        return Reservation::where('room_id', $room_id)->get();
    }
    
    public function getArticle($id){
        return Article::with(['object.photos','comments'])->find($id);
    }
    
    public function getPerson($id){
        return User::with(['objects','larticles', 'comments.commentable'])->find($id);
    }
    
    public function like($likeable_id, $type, $request)
    {
        $likeable = $type::find($likeable_id);
      
        return $likeable->users()->attach($request->user()->id);
    }
    
   
    public function unlike($likeable_id, $type, $request)
    {
        $likeable = $type::find($likeable_id);
      
        return $likeable->users()->detach($request->user()->id);
    }
    
     public function addComment($commentable_id, $type, $request)
    {
        $commentable = $type::find($commentable_id);
        
        $comment = new Comment;
 
        $comment->content = $request->input('content');

        $comment->rating = $type == 'App\TouristObject' ? $request->input('rating') : 0;

        $comment->user_id = $request->user()->id;
        
        return $commentable->comments()->save($comment);
    }
    
    public function getReservationsByRoomId( $room_id )
    {
        return  Reservation::where('room_id',$room_id)->get(); 
    } 
    
     public function makeReservation($room_id, $city_id, $request)
    {
        return Reservation::create([
                'user_id'=>$request->user()->id,
                'city_id'=>$city_id,
                'room_id'=>$room_id,
                'status'=>0,
                'day_in'=>date('Y-m-d', strtotime($request->input('checkin'))),
                'day_out'=>date('Y-m-d', strtotime($request->input('checkout')))
            ]);
    }
    
    
}