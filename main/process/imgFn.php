<?php function defaultImage($imgPath,$fileName, $role)
    {
        // $imgPath = ;
            if ($fileName == '') {
                $imgPath .= "user.png";
            } else if ($role == 'member' && file_exists("../../data/uploads/member/" . $fileName)) {
                $imgPath .= "member/" . $fileName;
            }else if ($role == 'child' && file_exists("../../data/uploads/child/" . $fileName)) {
                $imgPath .= "child/" . $fileName;
            } else {
                $imgPath .= "na.png";
            }
        return $imgPath;
    }
    // $imgPath = '../../data/uploads/';
    // if ($data['profile_pic'] == '') {
    //     $imgPath .= "user.png";
    // } else if (file_exists("../../data/uploads/child/" . $data['profile_pic'])) {
    //     $imgPath .= "child/" . $data['profile_pic'];
    // } else {
    //     $imgPath .= "na.png";
    // }
    ?>