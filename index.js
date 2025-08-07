

const darkLightMode = ()=> {
   const seemore = document.querySelector("#seemore");
   const seemoreElement = document.querySelector("#seemoreElement");
   const lightMode = document.querySelector("#lightMode");
    
   seemoreElement.classList.toggle("addSeemoreElement");
  
}
  seemore.addEventListener("click", ()=> darkLightMode());


//////////<<<<<<<<<<< DARK MODE FUNCTION >>>>>>>>>/////////////
const darkMode = document.querySelector("#darkMode");
darkMode.addEventListener("click", ()=> {
     const body = document.querySelector("body");
    
     body.classList.add("darkModeBody");
   });

const lightMode = document.querySelector("#lightMode");
lightMode.addEventListener("click", ()=> {
      const body = document.querySelector("body");
    
     body.classList.remove("darkModeBody");
})



// let likesCounts = ()=>{
//     let count=0;
//     count +=1;
//     likeCounts.innerHTML = count;
//     alert("like")
    
// }


const comments = document.querySelectorAll("#comment");

comments.forEach(comment => {

  comment.addEventListener("click", ()=> {

    comment.style.backgroundColor="red";
    comment.innerHTML="hello";
    comment.classList.add("active");
  })
  
});





  

