
$(document).ready(function () {
  $('.tab_content').hide().first().show();
  $(".tab_btn").first().css("background-color","red");
  
  //Tab Accordian
  $('.tab_btn').click(function(){
  $('.tab_content').hide().eq($(this).index()).show();
  $(".tab_btn").eq($(this).index()).css("background-color","red");
  $(".tab_btn").not($(".tab_btn").eq($(this).index())).css("background-color","");
    
  });

  //Color Picker Plugin
  $('.color_picker').spectrum({
    type: "text",
    showPalette: false  
  });
  
  $(".standard_card").hide();


  //Reset Button For Color Picker
$(document).on("click",".reset_color",function(){
  SetValues_Color_Picker();
  GetValue();
});

function SetValues_Color_Picker()
{
  $("#primary_color").val("#f44336");
  $("#secondary_color").val("#276cb8");
  $("#tertiary_color").val("#8fce00");
}

  //Change Cards View
$(document).on("change","input[type='radio']",function(){
  var template = $("input[type='radio']:checked").val();
  console.log(template)
  if(template=="clean") 
  {
    $(".clean_card").show()
    $(".standard_card").hide()
  }
  else
  {
    $(".clean_card").hide()
    $(".standard_card").show()
  }  
});


  //Download Pdf 
$(document).on("click","#download",function()
{
  GetValue();
  var template = $("input[type='radio']:checked").val();
  if($("#form_value").valid() == true)
  {
    if(template=="clean")
    {
      let pdf = new jsPDF();
      let section = $('.clean_card');
      let page= function() {
          pdf.save('card.pdf');
      };
      pdf.addHTML(section,page);
    }
    if(template=="standard")
    {

      let pdf = new jsPDF();
      let section = $('.standard_card');
      let page= function() {
          pdf.save('card.pdf');
      };
      // pdf.addImage(myImage, 'JPEG', 10, 30, 150, 76);
      pdf.addHTML(section,page);
    }
  }
  else
  {
    $('.tab_content').eq(2).show();
    $('.tab_content').not($('.tab_content').eq(2)).hide();
  } 
});


  //Reset for Wizard
$(document).on("click","#reset",function(){
  $('input').val("");
  SetValues_Color_Picker();

  $('.tab_content').eq(0).show();
  $('.tab_content').not($('.tab_content').eq(0)).hide();
  $(".tab_btn").eq(0).css("background-color","red");
  $(".tab_btn").not($(".tab_btn").eq(0)).css("background-color","");
  GetValue();
});

$(document).on("change keyup click","input",function(){
  GetValue();
});

//Get values From Input Fields
function GetValue()
{
  var company_name = $("#company_name").val()
  var full_name = $("#company_fullname").val();
  var designation = $("#company_designation").val();
  var contact = $("#company_contact").val();
  var email = $("#company_email").val();
  var website = $("#company_Website").val();
  var logo = $("#company_logo").val();
  
  (company_name.length==0) ? $(".set_company_name").text("Company Name") : $(".set_company_name").text(company_name);
  (full_name.length==0) ? $(".set_name").text("Dhaval Dubariya") :   $(".set_name").text(full_name);
  (designation.length==0) ? $(".set_designation").text("Head Of Marketing") :   $(".set_designation").text(designation);
  (contact.length==0) ? $(".set_contact").text("9998817524") :   $(".set_contact").text(contact);
  (email.length==0) ? $(".set_email").text("dhavaldubariya35@gmail.com") :   $(".set_email").text(email);
  if(website.length==0) {
     $(".set_website").text("https://www.weboccult.com/")
    
     let finalURL ='https://chart.googleapis.com/chart?cht=qr&chl=https://www.weboccult.com/&chs=160x160&chld=L|0';
     $('.qr-code').attr('src', finalURL);
   }
   else
   {
     $(".set_website").text(website);
     let finalURL ='https://chart.googleapis.com/chart?cht=qr&chl=' + website +'&chs=160x160&chld=L|0';
     $('.qr-code').attr('src', finalURL);
   } 
 
  if(logo.length==0) 
  {
    $(".front_logo").find("i").addClass("fa fa-id-card-o")
  }
  else
  {
    var logo_class = "fa " + logo ; 
    $(".front_logo").find("i").removeClass(); 
    $(".front_logo").find("i").addClass(logo_class);
  } 


  //Color Change
  var primary_color = $("#primary_color").val();
  $(".front_logo").css({ "color" : `${primary_color}`});
  $(".back_clean_card,.botom_2,.botom").css({"background-color" :  `${primary_color}` });
  
  var secondary_color = $("#secondary_color").val();
  $(".set_company_name,.set_name,.botom_2,.botom").css({"color":`${secondary_color}`});

  var tertiary_color = $("#tertiary_color").val();
  $(".set_designation,.front_icons,.scanme").css({"color":`${tertiary_color}`});


  //validation For Input Fields
  $.validator.addMethod(
    "logo",
    function (value) {
      return value.match(
        /^[a-zA-Z'-]+$/
        );
    },
    "Invalid IP address"
  );
  $("#form_value").validate({
    
    ignore: [],
    //Error Placement For Input Field.
    rules: {
      company_name: {
        required: true,
        minlength:2,
        maxlength:20,
        lettersonly: true,
      },
      company_fullname: {
        required: true,
        minlength:2,
        maxlength:20,
      },
      company_designation: {
        required:true,
        lettersonly:true,
      },
      company_contact: {
        required: true,
        minlength:10,
        maxlength:10,
      },
      company_email: {
        required: true,
        email: true,
      },
      company_Website: {
        required: true,
        url: true
      },
      company_logo: {
        required: true,
        logo:true,
        minlength:2,
        maxlength:20,
      },
   },
    messages: {
      company_name: "Enter CompanyName",
      company_fullname: "Enter your name",
      company_designation: "Enter Designation",
      company_contact: "Enter Contact Number",
      company_email: "Enter Valid Email",
      company_Website: "Enter Valid Url",
      company_logo: "Enter Logo",
      
    },
  });

}

});





