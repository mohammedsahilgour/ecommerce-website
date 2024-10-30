
var select_card = document.querySelectorAll(".select");

var title = document.getElementById("title");
var price = document.getElementById("price");

var selected=2;



var reset = ()=>{
  
select_card.forEach((k)=>{
  
 k.setAttribute("data-selected", "false");
})
}

select_card.forEach((a,i)=>{
  
  a.addEventListener("click",(e)=>{
     reset();
   a.setAttribute("data-selected", "true")
    selected=i+1;
    
    
    
    
  })
})



var select_btn = document.querySelector(".select-btn");

var container = document.querySelector(".container");


var exit_btn = document.querySelector(".exit-btn");



select_btn.addEventListener("click",()=>{
  
  container.style.display="flex"
  
  if(selected==1){
    title.innerHTML = "Feed a child for 1 day";
    price.innerHTML ="5.50 USD";
    
  }
  
  if(selected==2){
    title.innerHTML = "Feed a child for 3 days"
    price.innerHTML ="16.50 USD";
    
  }
  
   if(selected==3){
    title.innerHTML = "Feed a child for 7 days"
     price.innerHTML ="38.50 USD";
    
  }
 

})


exit_btn.addEventListener("click",()=>{
  
  container.style.display="none";

  
  

})