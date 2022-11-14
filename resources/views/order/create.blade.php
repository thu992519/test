@extends('order.neworderlayout')

@section('css')
<style type="text/css">
        #main{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center
            

        }
        .drink{
            margin:10px;
        }
        .food{
            margin:10px;
        }
        .menu{
            margin:10px;
        }
        .totalmoney{
            display:flex;
        }
    </style>
    @endsection

@section('main')




<body>
    <div id="main">
        <div class="title" id="top" name="top">
            <h1>餐飲選擇</h1>
        </div>
        <div class="drink">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    飲料
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#blacktea">紅茶</a></li>
                    <li><a class="dropdown-item" href="#greentea">綠茶</a></li>
                    <li><a class="dropdown-item" href="#qgreentea">青茶</a></li>
                </ul>
            </div>
        </div>

        <div class="food">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    餐飲
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">咖哩飯</a></li>
                    <li><a class="dropdown-item" href="#">雞肉飯</a></li>
                    <li><a class="dropdown-item" href="#">肉骨茶麵</a></li>
                </ul>
            </div>
        </div>

        <div class="totalmoney" id="totalmoney">

          
           
        </div>

        <div class="blacktea menu" id="blacktea" name="blacktea">
            <a name="blacktea" id="blacktea"></a>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                        <h3>紅茶</h3><h3>30元</h3>
                    <form method="post" action="{{ route('orderact.store') }}">  @csrf
                    <input type="hidden" name="item" value="紅茶">  
                        <div class="mb-3">
                            <select name="qty" class="form-select" aria-label="Default select example">
                                <option selected>選擇數量</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="ice" class="form-select" aria-label="Default select example">
                                <option selected>選擇冰量</option>
                                <option value="正常">正常</option>
                                <option value="少冰">少冰</option>
                                <option value="微冰">微冰</option>
                                <option value="去冰">去冰</option>

                            </select>
                        </div>                                         
                        <div class="mb-3">
                            <select name="sugar" class="form-select" aria-label="Default select example">
                                <option selected>選擇甜度</option>
                                <option value="正常">正常</option>
                                <option value="半糖">半糖</option>
                                <option value="微糖">微糖</option>
                                <option value="無糖">無糖</option>
                            </select>
                        </div>
                        
                        <button type="submit" id="btn" class="btn btn-primary">確認</button>
                    </form> 
                </div>  
            </div>                      
        </div>

        <div class="greentea menu" id="greentea" name="greentea">
            <a name="greentea" id="blacktea"></a>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                        <h3>綠茶</h3><h3>30元</h3>
                        <form method="post" action="{{ route('orderact.store') }}">  @csrf
                    <input type="hidden" name="item" value="綠茶">  
                        <div class="mb-3">
                            <select name="qty" class="form-select" aria-label="Default select example">
                                <option selected>選擇數量</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="ice" class="form-select" aria-label="Default select example">
                                <option selected>選擇冰量</option>
                                <option value="正常">正常</option>
                                <option value="少冰">少冰</option>
                                <option value="微冰">微冰</option>
                                <option value="去冰">去冰</option>

                            </select>
                        </div>                                         
                        <div class="mb-3">
                            <select name="sugar" class="form-select" aria-label="Default select example">
                                <option selected>選擇甜度</option>
                                <option value="正常">正常</option>
                                <option value="半糖">半糖</option>
                                <option value="微糖">微糖</option>
                                <option value="無糖">無糖</option>
                            </select>
                        </div>
                        
                        <button type="submit" id="btn" class="btn btn-primary">確認</button>
                    </form> 
                </div>  
            </div>                      
        </div>

        <div class="qgreentea menu" id="qgreentea" name="qgreentea">
            <a name="qgreentea" id="qgreentea"></a>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                        <h3>青茶</h3><h3>30元</h3>
                    <form method="post" action="{{ route('orderact.store') }}">  @csrf
                    <input type="hidden" name="item" value="青茶">  
                        <div class="mb-3">
                            <select name="qty" class="form-select" aria-label="Default select example">
                                <option selected>選擇數量</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="ice" class="form-select" aria-label="Default select example">
                                <option selected>選擇冰量</option>
                                <option value="正常">正常</option>
                                <option value="少冰">少冰</option>
                                <option value="微冰">微冰</option>
                                <option value="去冰">去冰</option>

                            </select>
                        </div>                                         
                        <div class="mb-3">
                            <select name="sugar" class="form-select" aria-label="Default select example">
                                <option selected>選擇甜度</option>
                                <option value="正常">正常</option>
                                <option value="半糖">半糖</option>
                                <option value="微糖">微糖</option>
                                <option value="無糖">無糖</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">確認</button>
                    </form> 
                </div>  
            </div>                      
        </div>

    </div>

@endsection