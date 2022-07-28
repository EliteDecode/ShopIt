let trashItem = document.getElementById('trash_item');
let saveItem = document.getElementById('save_item')

trashItem.addEventListener('click', e=>{
  if(confirm('Delete Item?')){
         alert( "Item Deleted successfully")
  }
})


saveItem.addEventListener('click', e=>{
  if(confirm('Add to saved Item?')){
         alert( "Item Added successfully")
  }
});




