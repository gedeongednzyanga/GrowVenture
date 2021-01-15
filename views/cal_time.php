<?php
    date_default_timezone_set('Africa/Kinshasa');
   //echo facabook_time_ago("2021-01-14 21:40:00");

    function cal_time_ago($timestamp){

        $time_ago = strtotime($timestamp);
        $current_time = time();
        $time_defference =$current_time - $time_ago ;
        $seconds = $time_defference;
        $minutes = round($seconds / 60);
        $hours = round($seconds / 3600);
        $days = round($seconds / 86400);
        $weeks = round($seconds / 604800);
        $months = round($seconds / 2629440);
        $years = round($seconds / 31553280);

        if($seconds <= 60){
            return "Just Now";
        }else if ($minutes <= 60){
            if($minutes == 1){
                return "One minute ago";
            }else{
                return "$minutes minutes ago";
            }
        }else if($hours <= 24){
            if($hours == 1){
                return "One hour ago";
            }else{
                if($hours < 10)
                    return "0$hours hours ago";
                else
                return "$hours hours ago";
            }
        }else if($days <= 7){
            if($days == 1){
                return "yesterday";
            }else{
                if($days < 10)
                    return "0$days days ago";
                else
                    return "$days days ago";
            }
        }else if ($weeks <= 4.3){
            if($weeks == 1){
                return "a week ago";
            }else{
                if($weeks < 10)
                    return "0$weeks weeks ago";
                else
                    return "$weeks weeks ago";
            }
        }else if($months <= 12){
            if($months == 1){
                return "a month ago";
            }else{
                if($months < 10)
                    return "0$months months ago";
                else
                    return "$months months ago";
            }
        }else{
            if($years == 1){
                return "one year ago";
            }else{
                if($years < 10)
                    return "0$years years ago";
                else
                    return "$years years ago";
            }
        }
    } 

?>