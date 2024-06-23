<?php

//get validate user query
$getValidateQuery = "SELECT
                    tvu.id AS _id
                    FROM
                    tbl_vendor_users AS tvu 
                    WHERE tvu.tvu_mobile_number = ?";

//get user unique id
$getUserUniqueId = "SELECT
                    tvu.tvu_user_id AS _user_id
                    FROM
                    tbl_vendor_users AS tvu";

//create user profile query
$createUserProfile = "INSERT INTO
                        tbl_vendor_users(
                        tvu_user_id,
                        tvu_full_name,
                        tvu_mobile_number,
                        tvu_email_id,
                        tvu_referal_code,
                        tvu_profile_status)
                        VALUES
                        (?, ?, ?, ?, ?, ?)";

//get user profile data query
$getUserProfile = "SELECT
                    tvu.id AS _id,
                    tvu.tvu_user_id AS _user_id,
                    tvu.tvu_full_name AS _user_full_name,
                    tvu.tvu_mobile_number AS _user_mobile_number,
                    tvu.tvu_email_id AS _user_email,
                    tvu.tvu_aadhar_number AS _user_adhar_number,
                    tvu.tvu_profile_image AS _user_profile_img,
                    tvu.tvu_profile_image_name AS _user_profile_img_name,
                    tvu.tvu_profile_image_type AS _user_profile_img_type,
                    tvu.tvu_aadhar_image AS _user_adhar_img,
                    tvu.tvu_adhar_image_name AS _user_adhar_img_name,
                    tvu.tvu_aadhar_image_type AS _user_adhar_img_type,
                    tvu.tvu_referal_code AS _user_referal_code,
                    tvu.tvu_referal_code_by AS _user_referal_code_by,
                    tvu.tvu_creation_date AS _user_creation_time,
                    tvu.tvu_last_update_date AS _user_last_update,
                    tvu.tvu_profile_verification_status AS _user_profile_verifi_status,
                    tvu.tvu_profile_status AS _user_profile_status
                    FROM
                    tbl_vendor_users AS tvu 
                    WHERE tvu.tvu_mobile_number = ?";

