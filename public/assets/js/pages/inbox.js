var bool = null;
function setEditid(editvalue) {
  document.getElementById("editingid").value = editvalue;
}

function showReply(bool) {
  let reply_note = document.getElementById("reply_note");

  if (bool) {
    reply_note.style.display = "block";
  } else {
    reply_note.style.display = "none";
  }
}
