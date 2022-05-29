<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head-layout')

<body>
  <div id="app">
    @include('layouts.nav-layout')
    <main class="py-4">

      <!-- kategori -->
      <div class="relative" style="width: 1440px; height: 50px;">

        <div class="kategori mx-4 mt-2">
          <div class="inline-flex bg-white bg-opacity-50 border rounded-lg border-black ml-4" style="width: 750px; height: 35px; margin: left 10px;">
            @foreach ($kategori as $kategori)
            <a href="?id_kategori={{$kategori->id_kategori}}">
              <p class="text-2xl mx-4 mt-2 {{$current_kategori==$kategori->id_kategori?'active:underline text-green-500':null}}">{{$kategori->nama_kategori}}</p>
            </a>
            @endforeach
          </div>
        </div>
      </div>

      <div class="flex gap-4 mx-4">



        <div class="grow">

          <div class="grid grid-cols-3 gap-4">
            @foreach ($menu as $item)
            <div class="inline-flex flex-col space-y-2.5 items-start">


              <div class="group relative inline-flex items-center justify-center w-full h-64 pb-0.5 bg-gray-300" id="menu" onclick="clickMenu({{$item->id_menu}})">
                @role('manajer')
                <div class="absolute w-full h-full bg-gray-700/90 hidden group-hover:flex justify-center items-center gap-4">
                  <a class="inline " href="{{route('menu.edit', $item->id_menu)}}">
                    <img src="img/edit-tabel.png" alt="" srcset="" class="inline">
                    <span class="text-white text-lg">Edit</span>
                  </a>
                  <form action="{{route('menu.destroy', $item->id_menu)}}" method="post">
                    @csrf @method('delete')
                    <button class="inline" type="submit">
                      <img src="img/hapus-tabel.png" alt="" srcset="" class="inline">
                      <span class="text-white text-lg">Delete</span>
                    </button>
                  </form>
                </div>
                @endrole

                @if ($item->image)
                <div class="w-full h-full bg-cover bg-center bg-no-repeat" style="background-image: url({{$item->image}});">

                </div>
                @else
                <div class="w-full h-full bg-cover bg-center bg-no-repeat">

                </div>
                @endif
              </div>
              <p class="w-full text-xl text-center">{{$item->nama_menu}}</p>
              <p class="w-full text-xl text-center">Rp. {{$item->price}}</p>
            </div>
            @endforeach
          </div>
        </div>


        @yield('content')
      </div>
    </main>
  </div>
</body>

</html>
<script>
  var result = <?php echo $menu->values()->toJson() ?>;
  var clicked_menu, menu
  // let plus = document.getElementById('plus')
  // let minus = document.getElementById('minus')
  let count = 1
  const checkoutItems = new Map()

  function displayItems() {
    clicked_menu = document.getElementById('clicked_menu')
    clicked_menu.innerHTML = ''
    checkoutItems.forEach((quantity, idMenu) => {
      const menu = result.find(item => item.id_menu == idMenu)
      console.log()
      const element = `
      <div class="flex gap-2 w-full">
          <input name="id_menu[]" class="hidden" value="${menu.id_menu}" readonly />
          <div class="grow text-xl text-gray-400" >
            ${menu.nama_menu}
          </div>
          <div class="flex">
              <div>
                  <button type="button"><img class="w-full h-5" src="img/minus.png" id="minus" /></button>
              </div>
              <input class="text-xl text-gray-400 text-center" size="3" id="quantity" name="quantity[]" readonly value="${quantity}"/>
              <div>
                  <button type="button"><img class="w-full h-5" src="img/plus.png" id="plus" /></button>
              </div>
          </div>
          <div class="grow">
              <p class="text-sm text-green-500" id="totalPrice">Rp 12000</p>
          </div>
      </div>`

      clicked_menu.insertAdjacentHTML('beforeend', element)
    })
  }

  clickMenu = (idMenu) => {
    console.log("clicked", idMenu)
    var menu = result.find(item => item.id_menu == idMenu)
    if (menu) {
      const quantity = checkoutItems.get(idMenu)
      if (quantity) {
        checkoutItems.set(idMenu, quantity + 1)
      } else {
        checkoutItems.set(idMenu, 1)
      }
      displayItems()
    }

    //count total price
    // plus.addEventListener("click", () => {

    //   if (count == 0 || count > 0) {
    //     count++
    //     document.getElementById('quantity').value = count
    //     var totprice = document.getElementById('totalPrice').innerHTML = menu.price * count
    //   } else if (count < 0) {
    //     console.log("jumlah tidak sesuai")
    //   }
    // })

    // minus.addEventListener("click", () => {
    //   if (count > 0) {
    //     count--
    //     document.getElementById('quantity').value = count
    //     var totprice = document.getElementById('totalPrice').innerHTML = menu.price * count
    //   } else {
    //     console.log("jumlah tidak sesuai")
    //   }

    // })

  }
</script>