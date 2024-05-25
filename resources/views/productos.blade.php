<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>electronica</title>
    <meta name="description" content="">
    {{ Html::style('assets/images/favicon.png') }}

    {{ Html::style('assets/images/favicon.ico') }}
    {{ Html::style('assets/css/vendors/plugins.min.css') }}
    {{ Html::style('assets/css/style.css') }}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

    <div id="wrapper" class="wrapper">
        <div class="tm-header tm-header-sticky">

            <div class="tm-header-middlearea bg-white">
                <div class="container">
                    <div class="tm-mobilenav"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-6 order-1 order-lg-1">
                            <a href="#" class="tm-header-logo">
                                <img src="{{ asset('assets/images/logoe.png') }}" alt="surose">
                            </a>
                        </div>
                        <div class="col-lg-6 col-12 order-3 order-lg-2">

                        </div>
                        <div class="col-lg-3 col-6 order-2 order-lg-3">
                            <ul class="tm-header-icons">

                                <li><a href="#"><i class="ion-bag"></i><span>0</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-header-bottomarea bg-white">
                <div class="container">
                    <nav class="tm-header-nav">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Principal</a></li>
                            <li><a href="{{ route('producto.ver') }}">Productos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>






        <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage={{ asset('assets/images/5.png') }}>
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2>{{ $categoria->categoria }}</h2>
                </div>
            </div>
        </div>








        <main class="page-content">
            <div class="tm-products-area tm-section tm-padding-section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-12">

                            <div class="tm-shop-products">
                                <div class="row mt-30-reverse">





                                    @foreach ($productos as $value)
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mt-50">
                                            <div class="tm-product tm-scrollanim">
                                                <div class="tm-product-topside">
                                                    <div class="tm-product-images">
                                                        @if ($value->imagenProducto == null)
                                                            <img src="{{ asset('img_producto/producto.png') }}"
                                                                alt="producto">
                                                        @else
                                                            <img src="{{ asset('img_producto/' . $value->imagenProducto) }}"
                                                                alt="producto">
                                                        @endif


                                                    </div>
                                                    <ul class="tm-product-actions">
                                                        <li><a href="#"><i class="ion-android-cart"></i>
                                                                Producto</a>
                                                        </li>
                                                        <li><button data-fancybox data-src="#tm-product-quickview" onclick="ModalView({{$value}})"><i
                                                                    class="ion-eye"></i></button></li>

                                                    </ul>

                                                </div>
                                                <div class="tm-product-bottomside">
                                                    <h6 class="tm-product-title"><a
                                                            href="#">{{ $value->nombre }}</a></h6>
                                                    <span class="tm-product-price">{{ $value->precio }} Bs</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                    <div class="tm-product-quickview" id="tm-product-quickview">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9 col-lg-10 col-12">
                                                    <div class="tm-product-quickview-inner">
                                                        <div class="tm-prodetails">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-10 col-12">
                                                                    <img src="{{asset('img_producto/producto.png')}}"
                                                                                    alt="product 1" id="producto_imagen">
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-12">
                                                                    <div class="tm-prodetails-content">
                                                                        <h4 class="tm-prodetails-title" id="producto_nombre"></h4>
                                                                        <span
                                                                            class="tm-prodetails-price" id="producto_precio"></span>
                                                                        
                                                                        <div class="tm-prodetails-infos">
                                                                            <div class="tm-prodetails-singleinfo">
                                                                                <b>Codigo : </b><span id="producto_codigo"></span>
                                                                            </div>
                                                                            <div class="tm-prodetails-singleinfo">
                                                                                <b>Categoria : </b><span id="producto_categoria"></span>
                                                                            </div>
                                                                        
                                                                            
                                                                          
                                                                        </div>
                                                                        <p id="producto_descripcion"></p>
                                                                        {{-- <div class="tm-prodetails-quantitycart">
                                                                            <h6>Quantity :</h6>
                                                                            <div class="tm-quantitybox">
                                                                                <input type="text" value="1">
                                                                            </div>
                                                                            <a href="#"
                                                                                class="tm-button tm-button-dark">Add To
                                                                                Cart</a>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="widgets">
                                <div class="single-widget widget-categories">
                                    <h6 class="widget-title">Categories</h6>
                                    <ul>
                                        @foreach ($categorias as $value)
                                            <li><a
                                                    href="{{ route('producto.ver', $value->id) }}">{{ $value->categoria }}</a>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
























        <div class="tm-footer">
            <ul id="instafeed" class="tm-instaphotos"></ul>
            <div class="tm-footer-toparea tm-padding-section">
                <div class="container">
                    <div class="widgets widgets-footer row">



                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-info">
                                <a class="widget-info-logo" href="index.html"><img
                                        src="{{ asset('assets/images/logoe.png') }}" alt="logo"></a>
                                <p>Contactanos a nuestra direccion llallagua</p>
                                <ul>
                                    <li><b>Celular :</b>67552149</li>

                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quicklinks">


                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-newsletter">
                                <h6 class="widget-title">Ubicacion</h6>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3587.957172627113!2d-66.58494546156916!3d-18.424169644840703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93fd20109ab8ff8d%3A0xeb442917f9fd9afc!2sLlallagua!5e1!3m2!1ses!2sbo!4v1716645829245!5m2!1ses!2sbo"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-footer-bottomarea">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <p class="tm-footer-copyright">©
                                2024.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>
    </div>
    <script type="text/javascript" data-pagespeed-no-defer>
        pagespeed.lazyLoadImages.overrideAttributeFunctions();
    </script>
    {{ Html::script('assets/js/vendors/plugins.min.js') }}
    {{ Html::script('assets/js/main.js') }}
    <script>
        function ModalView(value){
            var producto_nombre =document.getElementById('producto_nombre')
            producto_nombre.innerHTML=value['nombre']

            var producto_precio =document.getElementById('producto_precio')
            producto_precio.innerHTML=value['precio']+' Bs'

            var producto_codigo =document.getElementById('producto_codigo')
            producto_codigo.innerHTML=value['codigo']+' Bs'

            var producto_categoria =document.getElementById('producto_categoria')
            producto_categoria.innerHTML=value['categoria']+' Bs'

            var producto_descripcion =document.getElementById('producto_descripcion')
            producto_descripcion.innerHTML=value['descripcion']+' Bs'
            if(value['imagenProducto'] == null){
                var route3 = "{{asset('img_producto')}}/producto.jpg";
            }else{
                var route3 = "{{asset('img_producto')}}/"+value['imagenProducto']+"";
            }

            

            var producto_imagen=document.getElementById('producto_imagen')


            producto_imagen.src=route3

          
        }
    </script>
</body>

</html>
