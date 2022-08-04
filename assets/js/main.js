jQuery(window).scroll(function (event) {
    var scroll = jQuery(window).scrollTop();
    if (scroll > 200) {
        jQuery('header').addClass('position-relative');
        jQuery('header').removeClass('position-fixed');
    } else {
        jQuery('header').removeClass('position-relative');
        jQuery('header').addClass('position-fixed');
    }
});


jQuery('#addFeild').click(function () {
    var cloneBox = jQuery(this).parents('.form-group').clone();
    cloneBox.find('#addFeild').remove();
    var getLenght = jQuery('.active .form-group').length;
    if (getLenght < 3) {
        jQuery(this).parents('.step-form').append(cloneBox);
    }

})


<<<<<<< HEAD

function activeTab(steps) {
    const list = [...document.querySelectorAll('.step-form')];
    document.querySelector('.total-steps').innerText = list.length;
    let widthFind = (100 / list.length) * steps;
    document.querySelector('.activeBar').style.width = widthFind +'%';
    const active = document.querySelector('.step-form.active');
    const result =  list.indexOf(active) + 1;
    document.querySelector('.active-steps').innerText = result;
=======
// function activeTab(steps) {
//     const list = [...document.querySelectorAll('.step-form')];
//     document.querySelector('.total-steps').innerText = list.length;
//     let widthFind = (100 / list.length) * steps;
//     document.querySelector('.activeBar').style.width = widthFind +'%';
//     const active = document.querySelector('.step-form.active');
//     const result =  list.indexOf(active) + 1;
//     document.querySelector('.active-steps').innerText = result;
// }



// jQuery('#develop').click(function(){
//     jQuery('.parimid-greets').hide();
//     jQuery('.pyrimid-flow').show();
//     activeTab(1);
// });

// function procedBtn() {
//     let list = [...document.querySelectorAll('.step-form')];
//     const totalLength = list.length;
//     let active = document.querySelector('.step-form.active');
//     let steps = list.indexOf(active);
//     if(steps <= totalLength) {
//         active.classList.remove('active')
//         steps = ++steps;
//         console.log(steps);
//         active = list[steps];
//         active.classList.add('active');
//         activeTab(steps);
//     }
// }


const list = Array.from(document.querySelectorAll('.step-form'));
const listLength = list.length;

let active = document.querySelector('.step-form.active');
let step = list.indexOf(active) + 1;


const develop = document.getElementById('develop')
develop.addEventListener('click', developFlow)


/*---- Develop Flow -----*/
function developFlow() {
    const pyramidGreets = document.querySelector('.parimid-greets')
    const pyramidFlow = document.querySelector('.pyrimid-flow')

    pyramidGreets.style.display = 'none';
    pyramidFlow.style.display = 'block';

    updatePyramid(step)
>>>>>>> f7ffc8b429e016f2789726c3f3a5a1d7aa0158ec
}


/*---- Proceed Button -----*/
let proceedButton = document.querySelector('.proceedButton');
if (typeof (proceedButton) != 'undefined') {
    proceedButton.addEventListener('click', function () {
        proceedBtn();
    })
}

function proceedBtn() {
    step = ++step;
    
    if (step <= listLength) {
        updatePyramid(step)
    }
// Else Call Function to Active First Step
}


/*---- Update Pyramid -----*/
function updatePyramid(step) {
    let activeStep = document.querySelector('.active-steps');
    let totalStep = document.querySelector('.total-steps');
    let activeBar = document.querySelector('.activeBar');
    let barWidth = (100 / listLength) * step;

    activeStep.innerText = step;
    totalStep.innerText = listLength;
    activeBar.style.width = `${barWidth}%`;

    active = document.querySelector('.step-form.active');
    active.classList.remove('active');
    list[step - 1].classList.add('active');
}




