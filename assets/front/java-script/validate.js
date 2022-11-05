$().ready(function() {
    // validate the comment form when it is submitted


    // validate signup form on keyup and submit
    $(".registerloginForm").validate({
        rules: {
            photo: "required",
            name: {
                required: true,
                minlength: 2
            },


            password: {
                required: true,
                minlength: 4,

            },

            confirmpassword: {
                required: true,
                minlength: 4,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true,
            //  remote: "/check-email"

            },
            mobile: {
                required:true,
                minlength: 10,
                maxlength: 10,
                digits: true,
              //  remote: "/check-mobile"


            },
            gender: "required"
        },


        messages: {
            gender: "الجنس مطلوب",
            photo: "الصورة مطلوب",

         name: {
                required: "الاسم مطلوب",
                minlength: "الحد الادنى للاسم حرفين"
            },
            password: {
                required: "من فضلك ادخل كلمة المرور",
                minlength: "الحد الادنى لكلمة المرور4 احرف"
            },
            New_password: {
                required: "من فضلك ادخل كلمة المرور",
                minlength: "الحد الادنى لكلمة المرور4 احرف"
            },
            confirmpassword: {
                required: "تاكيد كلمة المرور مطلوب",
                minlength: "الحد الادنى لكلمة المرور4 احرف",
                equalTo: "غير مطابقة مع كلمة المرور الاعلى"
            },
            email:  {
                email: "من فضلك ادخل بريد الكتروني صالح",
                required: " البريد الالكتروني مطلوب ",
                remote: "هذا البريد الالكتروني مستخدم من قبل"


        },
        mobile: {
            required:"رقم الهاتف مطلوب",
            digits:"يجب ان يتكون رقم الهاتف من ارقام فقط",
            minlength:"الحد الادنى 10 ارقام فقط",
            maxlength:"الحد الاقصى 10 ارقام  فقط",
            remote: "هذاالرقم مستخدم من قبل"

        }

    }
    });




});
