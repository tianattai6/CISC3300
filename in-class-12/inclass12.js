function numberGenerator() {
  // Local “free” variable that ends up within the closure
  let num = 1;
  function checkNumber() {
    console.log(num);
  }
  num++;
  return checkNumber;
}
// // //
const number = numberGenerator();
number(); //
