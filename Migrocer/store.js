if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
        console.log(quantityInputs)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0]
        .addEventListener('click', purchaseClicked);
}
var i = 0;

function purchaseClicked() {
    console.log(goods)
    
    
    var cartItems = document.getElementsByClassName('cart-items')[0];
    // var ty =  document.getElementsByClassName('cart-items');
   
    // var quantityElemen = document.getElementsByClassName('cart-item-title')[0];
    
    console.log(goods);
    localStorage.setItem("name",""+kk);
    console.log(window.localStorage.getItem("name"));
    
   
    
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
       

    }
    alert('Thank you for your purchase')
    
    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    // var array =[];
    // array.push(buttonClicked.parentElement.parentElement.innerText)
    // console.log(array)
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    // console.log(cartItems.getElementsByClassName('cart-item-title').innerText)

    for (var i = 0; i < cartItemNames.length; i++) {
        var mavits = cartItemNames[i].innerText;
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart. Increament quantity in the cart')
            return
        }

        
    }

    

    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button></div>
        `
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener
        ('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0]
    .addEventListener('change', quantityChanged)

    
}

var purchased = document.getElementsByClassName('tricks')[0]

var bangRow = document.createElement('div')

    bangRow.classList.add('cart-input')

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    var goods = [];
    var check = [];
    
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var mavitu = cartRow.innerText
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        
        var titles = cartRow.getElementsByClassName('cart-item-title')[0].innerText;
        
        

        var vyb = cartRow.getElementsByClassName('cart-item-title')[0].innerText;
        // console.log(cartRows[i].innerText)

        total = total + (price * quantity)
        total = Math.round(total * 100) / 100

        
        goods.push("" +titles + " price per item is " +price 
                +" ordered " +quantity +" kgs")

        check.push(cartRows[i].innerText);
 
    }
    var totals = i;
        document.getElementsByClassName('cart-total-price')[0].innerText = totals;

    console.log(goods.length);

   
    
    
    document.getElementsByClassName('cart-total-prices')[0].innerText = "$" + total
    

    bangRowContents = `<textarea name="goods" class="cart-price cart-column"  hidden>${goods}
    </textarea><textarea name="total" class="cart-price cart-column"  hidden>${total}</textarea><span>`



    bangRow.innerHTML = bangRowContents;
    purchased.appendChild(bangRow);

    
}