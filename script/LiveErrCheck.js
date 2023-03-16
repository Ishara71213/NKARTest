export default class LiveErrCheck {
  constructor(inputElement, errMsgElement, errMsg) {
    this.inputElement = document.getElementById(inputElement);
    this.errMsgElement = document.getElementById(errMsgElement);
    this.errMsg = errMsg;
    this.singlton = false;
  }

  errorTriger() {
    console.log(this.inputElement.value);
    if (this.inputElement.value.length < 5 && this.singlton) {
      this.errMsgElement.classList.remove("displayNone");
      this.errMsgElement.innerHTML = this.errMsg;
    } else {
      this.errMsgElement.classList.add("displayNone");
    }
  }
}
