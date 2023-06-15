import TypeOfPizza from "./js/TypeOfPizza";
import Pizza from "./js/Pizza";
import Size from "./js/Size";
import Topping from "./js/Topping";
import Button from "./js/Button";
import SizeList from "./js/SizeList";
import ToppingList from "./js/ToppingList";
import TypeOfPizzaList from "./js/TypeOfPizzaList";

const margarita = new TypeOfPizza({ id: 0, title: 'Маргарита', img: 'assets/img/маргарита.webp', price: 500, calories: 300});
const pepperoni = new TypeOfPizza({ id: 1, title: 'Пепперони', img: 'assets/img/пепперони.webp', price: 800, calories: 400});
const bavarskaya = new TypeOfPizza({ id: 2, title: 'Баварская', img: 'assets/img/баварская.webp', price: 700, calories: 450});

const big = new Size({ name:'Большая', price: 200, calories: 200});
const small = new Size({ name: 'Маленькая', price: 100, calories: 100});

const mozzarella = new Topping({
    id: 0,
    title: 'Сливочная моцарелла',
    img: 'assets/img/моцарелла.png',
    price: 99,
    calories: 0
});
const chesseBort = new Topping({
    id: 1,
    title: 'Сырный бортик',
    img: 'assets/img/бортик.png',
    price: 189,
    calories: 100
});
const parmesan = new Topping({
    id: 2,
    title: 'Чеддер и пармезан',
    img: 'assets/img/чеддер.png',
    price: 99,
    calories: 50
});

const pizzaMargarita = new Pizza({
    id: 0,
    title: 'Пицца Маргарита',
    img: 'assets/img/маргарита.webp',
    typeOfPizza: margarita,
    size: big,
    topping: [mozzarella]
});
const pizzaPepperoni = new Pizza({
    id: 1,
    title: 'Пицца Пепперони',
    img: 'assets/img/пепперони.webp',
    typeOfPizza: pepperoni,
    size: small,
    topping: [parmesan, chesseBort]
});
const pizzaBavarskaya = new Pizza({
    id: 2,
    title: 'Баварская пицца',
    img: 'assets/img/баварская.webp',
    typeOfPizza: bavarskaya,
    size: big,
    topping: [mozzarella, parmesan, chesseBort]
});

const button = new Button();

const typeOfPizzaList = new TypeOfPizzaList();
typeOfPizzaList
    .addToPizzaList(margarita)
    .addToPizzaList(pepperoni)
    .addToPizzaList(bavarskaya);
typeOfPizzaList.render();

const sizeList = new SizeList();

const toppingList = new ToppingList()
toppingList
    .addToToppingList(mozzarella)
    .addToToppingList(chesseBort)
    .addToToppingList(parmesan)
toppingList.render();

// console.log(pizzaMargarita);
//
// pizzaPepperoni.addTopping(bigMozzarella);
// console.log(pizzaPepperoni);
//
// console.log(pizzaBavarskaya.getTopping());
//
// console.log(pizzaMargarita.getSize());
//
// console.log(pizzaPepperoni.getStuffing());
//
// console.log(pizzaBavarskaya.CalculatePrice());
//
// console.log(pizzaMargarita.CalculateCalories());
//
// pizzaMargarita.removeTopping(bigMozzarella);
// console.log(pizzaMargarita);