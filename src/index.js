class typeOfPizza {
    constructor(namePizza, price, calories) {
        this.namePizza = namePizza;
        this.price = price;
        this.calories = calories;
    }
}

const margarita = new typeOfPizza('Маргарита', 500, 300);
const pepperoni = new typeOfPizza('Пепперони', 800, 400);
const bavarskaya = new typeOfPizza('Баварская', 700, 450);

class size {
    constructor(name, price, calories) {
        this.name = name;
        this.price = price;
        this.calories = calories;
    }
}

const big = new size('Большая', 200, 200);
const small = new size('Маленькая', 100, 100);

class topping {
    constructor(nameCheese, price, calories) {
        this.nameCheese = nameCheese;
        this.price = price;
        this.calories = calories;
    }
}

const bigMozzarella = new topping('Моцарелла', 50, 0);
const smallMozzarella = new topping('Моцарелла', 100, 0);
const bigChesseBort = new topping('Сырный борт', 150, 50);
const smallChesseBort = new topping('Сырный борт', 300, 50);
const bigParmesan = new topping('Чеддер и пармезан', 150, 50);
const smallParmesan = new topping('Чеддер и пармезан', 300, 50);

class Pizza {
    name = "";
    topping = [];
    size = null;
    typeOfPizza = null;
    price = 0;
    calories = 0;

    constructor(name, typeOfPizza, size, topping) {
        this.name = name;
        this.typeOfPizza = typeOfPizza;
        this.size = size;
        this.topping.push(...topping);
        this.addThing(typeOfPizza)
        this.addThing(size);
    }

    addThing({price, calories}) {
        this.price += price;
        this.calories += calories;
    }

    removeThing({price, calories}){
        this.price -= price;
        this.calories -= calories;
    }

    addTopping(topping) {
        this.addThing(topping);
        this.topping.push(topping);
    }

    removeTopping(topping) {
        if(this.topping.includes(topping))
        {
            const pizza = this.topping.indexOf(topping);
            this.removeThing(topping);
            this.topping.splice(pizza, 1);
        }
    }

    getTopping(topping) {
        return this.topping;
    }

    getSize() {
        return this.size;
    }

    getStuffing() {
        return this.typeOfPizza;
    }

    CalculatePrice() {
        return this.price;
    }

    CalculateCalories() {
        return this.calories;
    }
}

const pizzaMargarita = new Pizza('Пицца маргарита', margarita, big, [bigMozzarella]);
const pizzaPepperoni = new Pizza('Пицца Пепперони', pepperoni, small, [smallParmesan, bigChesseBort]);
const pizzaBavarskaya = new Pizza('Баварская пицца', bavarskaya, big, [smallMozzarella, bigParmesan, smallChesseBort]);

console.log(pizzaMargarita);

pizzaPepperoni.addTopping(bigMozzarella);
console.log(pizzaPepperoni);

console.log(pizzaBavarskaya.getTopping());

console.log(pizzaMargarita.getSize());

console.log(pizzaPepperoni.getStuffing());

console.log(pizzaBavarskaya.CalculatePrice());

console.log(pizzaMargarita.CalculateCalories());

pizzaMargarita.removeTopping(bigMozzarella);
console.log(pizzaMargarita);
