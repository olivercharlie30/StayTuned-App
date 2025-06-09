// import Name from "./database.js";


let ellipsis = document.querySelector("#fa-ellipsis");
let content = document.querySelector("content");
let navbar = document.querySelector("navbar");
let faComment = document.querySelector("#fa-comment");
let faBell = document.querySelector("#fa-bell");
let afterCreateElementEllipsis = document.querySelector(".afterCreateElementEllipsis");

let houseReloadPage = document.querySelector("#house");
let titleReload = document.querySelector("#titleReload");

let btnCreateAcount = document.querySelector("#btnCreateAcount");





function redirecetSignin(){
  window.location.href = "signin.php";
}


function countLike(){
  let countReact = document.querySelector("#countReact");
  let like = document.querySelector(".like");
  let count =0;
   count += 1;

   countReact.innerHTML = count;
   like.innerHTML = `<i class="fa-regular fa-thumbs-up"></i>Liked</span>`;
   like.style.color = "Blue";
}


function loadPage(){
  setTimeout(() => {
      window.addEventListener("load", ()=> {
      const loader = document.querySelector(".loader");

      loader.classList.add("loader-hidden");
      loader.addEventListener("transitionend",()=> {
      document.body.removeChild("loader");
    });
  });  
  }, 100);
}
loadPage();




function reloadPage() {
  setTimeout(() => {
      window.location.reload();
      window.location.href = 'index.html';
    
  }, 100);

}
houseReloadPage.addEventListener("click", ()=> {
    reloadPage();
});



function titleReloadPage() {
  setTimeout(()=> {
    window.location.reload();
    window.location.href = 'index.html';
    titleReloadPage.style.position = "fixed";
  },100);
}
titleReload.addEventListener("click", ()=> {
    titleReloadPage();
});




function scrolly() {
window.addEventListener("scroll", ()=> {
    navbar.classList.toggle(window.scrollBy > 0);
    navbar.style.position = "fixed";
    navbar.style.padding = "25px";
    navbar.style.width = "100%";

});
}
scrolly();



function faEllipsisCreateElement() {
    let div = document.createElement("div");
    div.innerHTML = "this is Create Element rightbar";
    div.className = "CreateELementEllipsis";
    navbar.appendChild(div);
}
ellipsis.addEventListener("click", ()=> {
    faEllipsisCreateElement();
    
});



function CommentCreteElement() {
  let div = document.createElement("div");
  div.innerHTML = "this is Create Element Comment";
  div.className = "CreateELementComment";
  navbar.appendChild(div);
};
faComment.addEventListener("click", ()=> {
     CommentCreteElement();
});


function fabellCreateElement() {
   let div = document.createElement("div");
  div.innerHTML = "this is Create Element Comment";
  div.className = "CreateELementBell";
  navbar.appendChild(div);
};
faBell.addEventListener("click", ()=> {
    fabellCreateElement();
});



fetch('https://fakestoreapi.com/products')
  .then(data => {
    return data.json();
  }).then((completedate)=> {
    // console.log(completedate[5].title);
    let data1 = " ";
    completedate.map((values)=> {
      data1 += ` <div class="postImageContent">
                  <div class="postIcon">
                    <i class="fa-sharp fa-solid fa-angles-right"></i>
                    <i class="fa-solid fa-xmark"></i>
                  </div>
                  <div class="user">
                    <img class="userProfile" src="/image/python.jpg" width="250px"/>
                    <div class="username"><strong>${values.title}</strong></div>
                  </div>
                 
                  <div class="dateTime">May 1 at 6:20 PM </div>
                  <div class="category"><p>${values.category}<span class="textMore"></span></p>
                      </div>
                      <span class="readMoreBtn"><i class="fa-solid fa-angles-right"></i> See More....</span>
                    <img class="postImage" src="${values.image}" alt="error image"/>
                    <div class="countLike">
                      <span id="countReact">10k</span>
                      <span>1.5k comments</span>
                      <span>350 shares</span>
                    </div>
                    <div class="likeSection">
                      <span class="like" onClick="countLike()"><i class="fa-regular fa-thumbs-up"></i>Like</span>
                      <span class="comment"><i class="fa-regular fa-comment"></i>Comments</span>
                      <span class="share"><i class="fa-solid fa-share"></i>share</span>
                    </div>
                 </div>
                        `;
    });

    document.querySelector("content").innerHTML = data1;    
    
  }).catch((error)=>{
    console.log(error);
  })


 