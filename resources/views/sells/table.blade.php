<div class="col-md-5">
  <h2>Sell Bitcoin easily</h2> 
  <p style="font-size: 16px;">Sell and investyour bitcoin in minutes using your credit card, bank transfer, digital currency or CashApp.</p> 
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Sell Now
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sell BTC</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/action_page.php">
                    <span style="font-size:23px">
                        <label for="quantity">Amount:</label>
                        <input type="number" style="width: 30%" id="quantity" name="quantity">
                        {{-- <button>Continue</button> --}}
                        <!-- Start WebsiteAlive Text Code ID: 25069 -->
                        <a href="javascript:void(0)" onclick="window.open('https://c1.websitealive.com/23713/visitor/window/?code_id=25069&dl='+escape(document.location.href),'wsa_23713_0','height=200,width=200')"/>Continue</a>
                        <!-- End WebsiteAlive Text Code -->
                    </span>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
</div>
<div class="col-md-7">
  <img src="https://assets.coinbase.com/assets/earn-upsell-desktop.dad0f473399e16fa8c176a9599c883ea.webp" style="width: 100%; height: 280px; object-fit: contain;" alt="bitcoin image"> 
</div>

<div class="col-md-12" style="text-align: center;">
    <h2>MonsterBTC your secure BTC Plug </h2>
    <p>Paxful is very popular in the cryptocurrency space and has had extensive coverage in many famous magazines. <br> One of our missions is to build 100 schools in Africa. Check out the video below to learn more about our #builtwithbitcoin initiative.</p>
</div>
<iframe width="100%" height="480" src="https://www.youtube.com/embed/n7kXtVsFGss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>





















{{-- <div class="table-responsive">
    <table class="table" id="buys-table">
        <thead>
            <tr>
                <th>Amount</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($buys as $buy)
            <tr>
                <td>{{ $buy->amount }}</td>
                <td>
                    {!! Form::open(['route' => ['buys.destroy', $buy->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('buys.show', [$buy->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('buys.edit', [$buy->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div> --}}
