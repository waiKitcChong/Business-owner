<?php
$url = "https://tripmate-service-3.onrender.com/get_all_data";
$response = file_get_contents($url);
$data = json_decode($response, true);


if (!$data) {
    die("Failed to fetch data from Python backend.");
}


// ===========================================
// Entity Class
// ==============================================

class User {
    public $user_id;
    public $created_at;
    public $role;
    public $email;
    public $name;
    public $password;
    public $login_attempts;
    public $status;
    public $last_login;
    public $reset_token;
    public $token_expiry;

    public function __construct($data) {
        $this->user_id = $data['user_id'] ?? null;
        $this->created_at = $data['created_at'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->password = $data['password'] ?? null;
        $this->login_attempts = $data['login_attempts'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->last_login = $data['last_login'] ?? null;
        $this->reset_token = $data['reset_token'] ?? null;
        $this->token_expiry = $data['token_expiry'] ?? null;
    }
}

class Booking {
    public $booking_id;
    public $totalPrice;
    public $bookingDate;
    public $bookingTime;
    public $tourist_id;
    public $promotion_id;

    public function __construct($data) {
        $this->booking_id = $data['booking_id'] ?? null;
        $this->totalPrice = $data['totalPrice'] ?? null;
        $this->bookingDate = $data['bookingDate'] ?? null;
        $this->bookingTime = $data['bookingTime'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
        $this->promotion_id = $data['promotion_id'] ?? null;
    }
}

class Business {
    public $business_id;
    public $restaurant_id;
    public $hotel_id;
    public $owner_id;

    public function __construct($data) {
        $this->business_id = $data['business_id'] ?? null;
        $this->restaurant_id = $data['restaurant_id'] ?? null;
        $this->hotel_id = $data['hotel_id'] ?? null;
        $this->owner_id = $data['owner_id'] ?? null;
    }
}

class Bussiness_Owner {
    public $owner_id;
    public $contact_number;
    public $registration_date;
    public $apply_status;
    public $business_license_no;
    public $mother_country;
    public $main_city;
    public $business_name;
    public $type;
    public $user_id;

    public function __construct($data) {
        $this->owner_id = $data['owner_id'] ?? null;
        $this->contact_number = $data['contact_number'] ?? null;
        $this->registration_date = $data['registration_date'] ?? null;
        $this->apply_status = $data['apply_status'] ?? null;
        $this->business_license_no = $data['business_license_no'] ?? null;
        $this->mother_country = $data['mother_country'] ?? null;
        $this->main_city = $data['main_city'] ?? null;
        $this->business_name = $data['business_name'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->user_id = $data['user_id'] ?? null;
    }
}

class Bussiness_Staff {
    public $staff_id;
    public $contact_number;
    public $registration_date;
    public $department;
    public $IC;
    public $country;
    public $address;
    public $user_id;
    public $owner_id;

    public function __construct($data) {
        $this->staff_id = $data['staff_id'] ?? null;
        $this->contact_number = $data['contact_number'] ?? null;
        $this->registration_date = $data['registration_date'] ?? null;
        $this->department = $data['department'] ?? null;
        $this->IC = $data['IC'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->user_id = $data['user_id'] ?? null;
        $this->owner_id = $data['owner_id'] ?? null;
    }
}

class Comments {
    public $commentID;
    public $content;
    public $status;
    public $timestamp;
    public $location_id;
    public $tourist_id;

    public function __construct($data) {
        $this->commentID = $data['commentID'] ?? null;
        $this->content = $data['content'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->timestamp = $data['timestamp'] ?? null;
        $this->location_id = $data['location_id'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
    }
}

class Community {
    public $postID;
    public $title;
    public $description;
    public $Images;
    public $tourist_id;
    public $status;

    public function __construct($data) {
        $this->postID = $data['postID'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->Images = $data['Images'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
        $this->status = $data['status'] ?? null;
    }
}

class EmergencySupport {
    public $emergenctID;
    public $accessedTime;
    public $nearestHospital;
    public $location_id;
    public $tourist_id;
    public $insurance_id;

    public function __construct($data) {
        $this->emergenctID = $data['emergenctID'] ?? null;
        $this->accessedTime = $data['accessedTime'] ?? null;
        $this->nearestHospital = $data['nearestHospital'] ?? null;
        $this->location_id = $data['location_id'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
        $this->insurance_id = $data['insurance_id'] ?? null;
    }
}

class Hotel {
    public $hotel_id;
    public $roomCount;
    public $name;
    public $state;
    public $amenities;
    public $status;
    public $size;
    public $image;
    public $created_at;

    public function __construct($data) {
        $this->hotel_id = $data['hotel_id'] ?? null;
        $this->roomCount = $data['roomCount'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->amenities = $data['amenities'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->size = $data['size'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->created_at = $data['created_at'] ?? null;
    }
}

class HotelBookingDetails {
    public $hotel_id;
    public $booking_id;
    public $schedule_id;

    public function __construct($data) {
        $this->hotel_id = $data['hotel_id'] ?? null;
        $this->booking_id = $data['booking_id'] ?? null;
        $this->schedule_id = $data['schedule_id'] ?? null;
    }
}

class Insurance {
    public $insurance_id;
    public $name;
    public $description;
    public $coverage_details;
    public $provider_name;
    public $currency;
    public $max_coverage_amount;
    public $duration_days;
    public $status;

    public function __construct($data) {
        $this->insurance_id = $data['insurance_id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->coverage_details = $data['coverage_details'] ?? null;
        $this->provider_name = $data['provider_name'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->max_coverage_amount = $data['max_coverage_amount'] ?? null;
        $this->duration_days = $data['duration_days'] ?? null;
        $this->status = $data['status'] ?? null;
    }
}

class Itinerary {
    public $itinerary_id;
    public $description;
    public $name;
    public $duration_days;
    public $creared_date;
    public $notes;

    public function __construct($data) {
        $this->itinerary_id = $data['itinerary_id'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->duration_days = $data['duration_days'] ?? null;
        $this->creared_date = $data['creared_date'] ?? null;
        $this->notes = $data['notes'] ?? null;
    }
}

class Location {
    public $location_id;
    public $name;
    public $address;
    public $latitude;
    public $longitude;
    public $description;
    public $country;
    public $city;
    public $locationImages;
    public $state;
    public $rating;

    public function __construct($data) {
        $this->location_id = $data['location_id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->latitude = $data['latitude'] ?? null;
        $this->longitude = $data['longitude'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->locationImages = $data['locationImages'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->rating = $data['rating'] ?? null;
    }
}

class Location_Rate {
    public $rate_id;
    public $location_id;
    public $tourist_id;
    public $rate;

    public function __construct($data) {
        $this->rate_id = $data['rate_id'] ?? null;
        $this->location_id = $data['location_id'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
        $this->rate = $data['rate'] ?? null;
    }
}

class Menu {
    public $menu_id;
    public $name;
    public $price;
    public $description;
    public $image;
    public $restaurant_id;

    public function __construct($data) {
        $this->menu_id = $data['menu_id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->price = $data['price'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->restaurant_id = $data['restaurant_id'] ?? null;
    }
}

class Promotion {
    public $promotion_id;
    public $title;
    public $description;
    public $discount_type;
    public $discount_value;
    public $code;
    public $usage_limit;
    public $usage_count;
    public $start_date;
    public $end_dte;
    public $status;
    public $tourist_id;

    public function __construct($data) {
        $this->promotion_id = $data['promotion_id'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->discount_type = $data['discount_type'] ?? null;
        $this->discount_value = $data['discount_value'] ?? null;
        $this->code = $data['code'] ?? null;
        $this->usage_limit = $data['usage_limit'] ?? null;
        $this->usage_count = $data['usage_count'] ?? null;
        $this->start_date = $data['start_date'] ?? null;
        $this->end_dte = $data['end_dte'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
    }
}

class Promotion_Target {
    public $target_id;
    public $target_type;
    public $promotion_id;
    public $business_id;

    public function __construct($data) {
        $this->target_id = $data['target_id'] ?? null;
        $this->target_type = $data['target_type'] ?? null;
        $this->promotion_id = $data['promotion_id'] ?? null;
        $this->business_id = $data['business_id'] ?? null;
    }
}

class RestBookingDetails {
    public $schedule_id;
    public $booking_id;
    public $menu_id;

    public function __construct($data) {
        $this->schedule_id = $data['schedule_id'] ?? null;
        $this->booking_id = $data['booking_id'] ?? null;
        $this->menu_id = $data['menu_id'] ?? null;
    }
}

class Rest_Schedule {
    public $schedule_id;
    public $start_date;
    public $end_date;
    public $status;
    public $table_id;

    public function __construct($data) {
        $this->schedule_id = $data['schedule_id'] ?? null;
        $this->start_date = $data['start_date'] ?? null;
        $this->end_date = $data['end_date'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->table_id = $data['table_id'] ?? null;
    }
}

class Restaurant {
    public $restaurant_id;
    public $state;
    public $name;
    public $amenities;
    public $address;
    public $status;
    public $image;

    public function __construct($data) {
        $this->restaurant_id = $data['restaurant_id'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->amenities = $data['amenities'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->image = $data['image'] ?? null;
    }
}

class Room {
    public $RoomNo;
    public $roomType_id;
    public $hotel_id;
    public $status;
    public $created_at;

    public function __construct($data) {
        $this->RoomNo = $data['RoomNo'] ?? null;
        $this->roomType_id = $data['roomType_id'] ?? null;
        $this->hotel_id = $data['hotel_id'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->created_at = $data['created_at'] ?? null;
    }
}

class RoomType {
    public $roomType_id;
    public $RoomPrice;
    public $type_name;
    public $DefaultRoomPrice;
    public $RoomDesc;
    public $Rooming;

    public function __construct($data) {
        $this->roomType_id = $data['roomType_id'] ?? null;
        $this->RoomPrice = $data['RoomPrice'] ?? null;
        $this->type_name = $data['type_name'] ?? null;
        $this->DefaultRoomPrice = $data['DefaultRoomPrice'] ?? null;
        $this->RoomDesc = $data['RoomDesc'] ?? null;
        $this->Rooming = $data['Rooming'] ?? null;
    }
}

class Room_Schedule {
    public $schedule_id;
    public $start_date;
    public $end_date;
    public $status;
    public $RoomNo;

    public function __construct($data) {
        $this->schedule_id = $data['schedule_id'] ?? null;
        $this->start_date = $data['start_date'] ?? null;
        $this->end_date = $data['end_date'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->RoomNo = $data['RoomNo'] ?? null;
    }
}

class SubComments {
    public $submit_id;
    public $content;
    public $status;
    public $timestamp;
    public $tourist_id;
    public $commentID;

    public function __construct($data) {
        $this->submit_id = $data['submit_id'] ?? null;
        $this->content = $data['content'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->timestamp = $data['timestamp'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
        $this->commentID = $data['commentID'] ?? null;
    }
}

class TableList {
    public $table_id;
    public $table_no;
    public $capacity;
    public $restaurant_id;

    public function __construct($data) {
        $this->table_id = $data['table_id'] ?? null;
        $this->table_no = $data['table_no'] ?? null;
        $this->capacity = $data['capacity'] ?? null;
        $this->restaurant_id = $data['restaurant_id'] ?? null;
    }
}

class Tag {
    public $tag_id;
    public $name;
    public $location_id;

    public function __construct($data) {
        $this->tag_id = $data['tag_id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->location_id = $data['location_id'] ?? null;
    }
}

class Tourists {
    public $tourist_id;
    public $age;
    public $name;
    public $phone_number;
    public $profile_image;
    public $birthdate;
    public $gender;
    public $nationality;
    public $user_id;

    public function __construct($data) {
        $this->tourist_id = $data['tourist_id'] ?? null;
        $this->age = $data['age'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->phone_number = $data['phone_number'] ?? null;
        $this->profile_image = $data['profile_image'] ?? null;
        $this->birthdate = $data['birthdate'] ?? null;
        $this->gender = $data['gender'] ?? null;
        $this->nationality = $data['nationality'] ?? null;
        $this->user_id = $data['user_id'] ?? null;
    }
}

class TripPlan {
    public $tripID;
    public $title;
    public $startDate;
    public $endDate;
    public $offlineAccess;
    public $isShared;
    public $destination;
    public $transport_mode;
    public $business_id;
    public $tourist_id;
    public $location_id;
    public $itinerary_id;

    public function __construct($data) {
        $this->tripID = $data['tripID'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->startDate = $data['startDate'] ?? null;
        $this->endDate = $data['endDate'] ?? null;
        $this->offlineAccess = $data['offlineAccess'] ?? null;
        $this->isShared = $data['isShared'] ?? null;
        $this->destination = $data['destination'] ?? null;
        $this->transport_mode = $data['transport_mode'] ?? null;
        $this->business_id = $data['business_id'] ?? null;
        $this->tourist_id = $data['tourist_id'] ?? null;
        $this->location_id = $data['location_id'] ?? null;
        $this->itinerary_id = $data['itinerary_id'] ?? null;
    }
}


