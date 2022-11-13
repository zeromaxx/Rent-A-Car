function calcInsurance(cubic, age) {
  let insurance = 0;
  switch (age) {
    case age >= 18 && age < 22:
      insurance = age * 0.00042 * cubic;
      break;
    case age >= 22 && age < 30:
      insurance = age * 0.00036 * cubic;
      break;
    default:
      insurance = age * 0.00023 * cubic;
      break;
  }

  return Math.round(insurance * 10) / 10;
}

function calculateRent(day, horsepower) {
  let rentCost = 0;
  if (day <= 5) {
    switch (horsepower) {
      case horsepower < 1600:
        rentCost = day * 15.42;
        break;
      case horsepower > 1600 && horsepower <= 2000:
        rentCost = day * 16.82;
        break;
      default:
        rentCost = day * 18.22;
    }
  }
  if (day >= 6 && day <= 10) {
    switch (horsepower) {
      case horsepower < 1600:
        rentCost = day * 14.62;
        break;
      case horsepower > 1600 && horsepower <= 2000:
        rentCost = day * 15.76;
        break;
      default:
        rentCost = day * 17.1;
    }
  }
  if (day > 10) {
    switch (horsepower) {
      case horsepower < 1600:
        rentCost = day * 13.15;
        console.log(rentCost);
        break;
      case horsepower > 1600 && horsepower <= 2000:
        rentCost = day * 14.8;
        break;
      default:
        rentCost = day * 16.2;
    }
  }

  return Math.round(rentCost * 10) / 10;
}
