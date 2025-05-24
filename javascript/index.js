let ellipsis = document.querySelector("#fa-ellipsis");
let content = document.querySelector("content");
let rightbar = document.querySelector("rightbar");

function faEllipsisCreateElement() {
    content.innerHTML = "hello Testing...";

    let div = document.createElement("div");
    div.innerHTML = "this is Create Element rightbar";
    div.className = "CreateELementEllipsis";
    rightbar.appendChild(div);

}
ellipsis.addEventListener("click", ()=> {
    faEllipsisCreateElement();
});