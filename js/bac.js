var preloader = document.querySelector('.preloader');

window.onload = function () {

  setTimeout(function () {
    preloader.classList.add('turn')
  }, 1000)

}

window.addEventListener('scroll', () => {

  let hede = document.querySelector('.hed')
  let winScr = window.scrollY

  if (winScr < 180) {
    hede.classList.remove("hide")
  } else {
    hede.classList.add("hide")

  }
})



var minus = document.querySelectorAll(".minus")
var plus = document.querySelectorAll(".plus")
var num = document.querySelectorAll(".num")
var total = document.querySelectorAll('.total ')





  //     // a++;
  //     // num.innerText = a;

  plus.forEach(btn => {

    btn.addEventListener('click', () => {


      let parent = btn.parentNode

      let num = parent.querySelector('.num')

      let viewNUm = parseInt(num.innerHTML)

      viewNUm++

      num.innerHTML = viewNUm

      let superParent = btn.closest('.list')

      let price = parseInt(superParent.querySelector('.price').innerHTML)

      let myTotal = multiplier(viewNUm, price, 'sum')

      superParent.querySelector('.total').innerHTML = myTotal

    })

  })
minus.forEach(btn => {

  btn.addEventListener('click', () => {


    let parent = btn.parentNode

    let num = parent.querySelector('.num')

    let viewNUm = parseInt(num.innerHTML)


    if (viewNUm > 0) {

      viewNUm--

      num.innerHTML = viewNUm
      
      let superParent = btn.closest('.list')

      let price = parseInt(superParent.querySelector('.price').innerHTML)

      let total = superParent.querySelector('.total')

      let final;

      if(viewNUm > 1){

        final = total.innerHTML - price*viewNUm

      }else if(viewNUm === 1){
        
        final  = price
      }else {
        final = 0
      }

     total.innerHTML = final

      
    }

  })

})


function multiplier(num, price, action) {
  if (action === 'sum') {
    return num * price
  } else {
    return price / num
  }
}

