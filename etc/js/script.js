// sub-nav hover states
var navIDs = ["#about","#programs","#help"];
var thedivs = ["#about-sub","#programs-sub","#help-sub"];

function hideDiv(elmt,parent) {
    $(elmt).css("display", "none");
    $(parent).removeClass("hover");
}
function showDiv(elmt,parent) {
    $(elmt).css("display", "block");
    $(parent).addClass("hover");
}

var width = $(window).width();

if (width > 1200){
    var timer1;
    $("#about").mouseover(function(){
        showDiv("#about-sub","#about");
    });
    $("#about-sub").mouseover(function(){
        showDiv("#about-sub","#about");
    });


    $("#about, #about-sub").mouseleave(function() {
        timer1 = setTimeout(hideDiv("#about-sub","#about"), 10000);
    }).mouseenter(function() {
        clearTimeout(timer1);
    });

    var timer2;
    $("#programs").mouseover(function(){
        showDiv("#programs-sub","#programs");
    });
    $("#programs-sub").mouseover(function(){
        showDiv("#programs-sub","#programs");
    });


    $("#programs, #programs-sub").mouseleave(function() {
        timer2 = setTimeout(hideDiv("#programs-sub","#programs"), 10000);
    }).mouseenter(function() {
        clearTimeout(timer2);
    });

    var timer3;
    $("#help").mouseover(function(){
        showDiv("#help-sub","#help");
    });
    $("#help-sub").mouseover(function(){
        showDiv("#help-sub","#help");
    });


    $("#help, #help-sub").mouseleave(function() {
        timer3 = setTimeout(hideDiv("#help-sub","#help"), 10000);
    }).mouseenter(function() {
        clearTimeout(timer3);
    });
} else {
    $("#about").click(function(){
        $("#about-sub").toggle();
        $("#programs-sub").hide();
        $("#help-sub").hide();
        $("#help").removeClass('program-adjusted');
        $("#help").addClass('program-normal');
        $("#news").removeClass('news-adjusted');
        $("#news").addClass('news-normal');
        $("#programs").toggleClass('program-normal program-adjusted');
    });

    $("#programs").click(function(){
        $("#programs-sub").toggle();
        $("#about-sub").hide();
        $("#help-sub").hide();
        $("#programs").removeClass('program-adjusted');
        $("#programs").addClass('program-normal');
        $("#news").removeClass('news-adjusted');
        $("#news").addClass('news-normal');
        $("#help").toggleClass('program-normal program-adjusted');
    });

    $("#help").click(function(){
        $("#help-sub").toggle();
        $("#programs-sub").hide();
        $("#about-sub").hide();
        $("#programs").removeClass('program-adjusted');
        $("#programs").addClass('program-normal');
        $("#help").removeClass('program-adjusted');
        $("#help").addClass('program-normal');
        $("#news").toggleClass('news-normal news-adjusted');
    });
}


//Confirms user wants to delete object
function confrimDelete(){
    var del = confirm("Are you sure you want to delete this?");
    if(del){
        //Delete object
    }
}
//Confirms user wants to edit object
function confrimEdit(){
    var edit = confirm("Are you sure you want to Edit this?");
    if(edit){
        //Links to edit page
        window.location.href = "link";
    }
}
//Donation tally function
function addTally(x){
    var current = document.getElementByID('tally').value;
    current = current + x;
    document.getElementById("tally").innerHTML = current;

}

//Slide show for images
// var slideInd = 0;
// slideShow();
// function slideShow(){
//     var slides = document.getElementsByClassName("slides");
//     for (i = 0; i < slides.length; i++){
//         slides[i].style.display = "none";
//     }
//     x[slideInd].style.display = "block";
//     slideInd ++;
//     if (slideInd > x.length){
//         slideInd = 0;
//     }
//     setTimeout(slideShow,3000);

// }
//Unhide mobile options and hides window options
function toMobile(){
    var win = document.getElementsByClassName("window");
    var mob = document.getElementsByClassName("mobile");
    for (i = 0; i < win.length; i++){
        win[i].style.display = "none";
    }
    for (i = 0; i < mob.length; i++){
        mob[i].style.display = "block";
    }
}
// // Checks if input in field is valid
// $(".required_field").on('input',function(){
//     var input = document.getElementByID('text_id').value;
//     //re is appropriate regex
//     var re = /abc/;
//     if (input == ""){
//         document.write(echo "This field must be filled");
//     }
//     else (!re.test(input)){
//         document.write(echo "This input is invalid.");
//     }
// });


//add active class to current page in nav
var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);

// pagename : nav ids that should be active
var pages = {
	'about.php':["#about"], 
	'story.php':["#about",'#story-nav'], 
	'approach.php':["#about",'#approach-nav'], 
	'people.php':["#about",'#people-nav'], 
	'programs.php':["#programs"], 
	'empowerment.php':["#empowerment-nav","#programs"], 
	'education.php':["#education-nav","#programs"], 
	'development.php':["#development-nav","#programs"], 
	'help.php':["#help"], 
	'sponsor.php':["#sponsor",'#help'], 
	'gifts.php':["#gifts",'#help'], 
	'shopping.php':["#shopping",'#help'], 
	'volunteer.php':["#volunteer",'#help'], 
	'news.php':["#news"], 
	'contact.php':["#contact"], 
	'donate.php':["#donate"],
    'login.php':["#login-btn"],
};

for (page in pages) { 
    if (sPage==page){
		for (i=0;i<pages[page].length;i++){
			var theID = pages[page][i];
			$(theID).addClass("active");
		}
	}
}

//mobile nav toggle
$(".mobile-nav").click(function(){
    $(".right-nav").toggle();
    $("#mobile-overlay").toggle();
    $("body").toggleClass('no-scroll');

    $("#programs-sub").hide();
    $("#about-sub").hide();
    $("#help-sub").hide();
    $("#help").removeClass('program-adjusted');
    $("#help").addClass('program-normal');
    $("#news").removeClass('news-adjusted');
    $("#news").addClass('news-normal');
    $("#programs").removeClass('program-adjusted');
    $("#programs").addClass('program-normal');
});

$("#mobile-overlay").click(function(){
    $(".right-nav").toggle();
    $("body").toggleClass('no-scroll');

    $("#programs-sub").hide();
    $("#about-sub").hide();
    $("#help-sub").hide();
    $("#help").removeClass('program-adjusted');
    $("#help").addClass('program-normal');
    $("#news").removeClass('news-adjusted');
    $("#news").addClass('news-normal');
    $("#programs").removeClass('program-adjusted');
    $("#programs").addClass('program-normal');

    $("#mobile-overlay").toggle();
});


//fixed scroll newsletter on news page
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $("#newsletter-signup").css("position", "fixed");
        $("#newsletter-signup").css("margin-top", "50px");
    } else {
        $("#newsletter-signup").css("position", "absolute");
        $("#newsletter-signup").css("margin-top", "99px");
    }
});

// $('.news-img-container img').each(function(i, obj) {
//     if (obj.height() > obj.width()){
//         console.log('hello');
//     }
// });
