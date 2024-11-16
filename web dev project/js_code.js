function change_z_index(){
    document.querySelector("#con").style.zIndex = -1;
    document.querySelector("#small_main").style.opacity = 1;
};

function previous_state(){
    document.querySelector('#con').style.zIndex
    = 0;
    document.querySelector("#small_main").style.opacity = 0;
};

function scroll_down(elementId) {
    var element = document.getElementById(elementId);
    element.scrollIntoView({ behavior: 'smooth' });
}
