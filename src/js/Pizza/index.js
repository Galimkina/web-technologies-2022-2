export default class Pizza {
    id;
    price = 0;
    calories = 0;
    topping = [];
    size = null;
    typeOfPizza = null;
    title = '';
    img = '';

    constructor(props) {
        this.id = props.id;
        this.title = props.title;
        this.img = props.img;
        this.typeOfPizza = props.typeOfPizza;
        this.size = props.size;
        this.topping.push(...props.topping);

        this._addThings(props);
    }

    _addThing({price, calories}) {
        this.price += price;
        this.calories += calories;
    }

    _addThings(props) {
        this._addThing(props.typeOfPizza);
        this._addThing(props.size);
        this.topping.forEach((topping) => {
            this._addThing(topping);
        });
    }

    removeThing({price, calories}){
        this.price -= price;
        this.calories -= calories;
    }

    addTopping(topping) {
        this._addThing(topping);
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


