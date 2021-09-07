$("body").on("input", ".input-words", function () {
  this.value = this.value.replace(/[^a-z\s]/gi, "");
});
(function () {
  var max = 10,
    count = 0,
    input = null,
    result = null;

  function init() {
    input = document.querySelector('#inp');
    result = document.querySelector('#count');

    input.addEventListener('keyup', keyup);
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

  document.addEventListener('DOMContentLoaded', init);
}());