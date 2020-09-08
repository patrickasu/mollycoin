@extends('layouts.layout')

@section('content')
    <div class="buying-rate">
        <h2>Buying Rate</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Amount</th>
                <th scope="col">Rates</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>$100 - $199</td>
                <td style="color: #46c682; font-weight: bolder;">$410</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>$200 - $499</td>
                <td style="color: #46c682; font-weight: bolder;">$420</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>$500 - $999</td>
                <td style="color: #46c682; font-weight: bolder;">$430</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>$1000 - Above</td>
                <td style="color: #46c682; font-weight: bolder;">$435</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr style="margin-bottom: 50px;">
    <div class="buying-rate">
        <h3>Selling Rate</h3>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Amount</th>
                <th scope="col">Rates</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>$100 - $199</td>
                <td style="color: #46c682; font-weight: bolder;">$430</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>$200 - $499</td>
                <td style="color: #46c682; font-weight: bolder;">$440</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>$500 - $999</td>
                <td style="color: #46c682; font-weight: bolder;">$450</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>$1000 - Above</td>
                <td style="color: #46c682; font-weight: bolder;">$460</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr style="margin-bottom: 50px;">
    <div class="buying-rate">
        <h3>CashApp  Rate</h3>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Amount</th>
                <th scope="col">Rates</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>$50 - $100</td>
                <td style="color: #46c682; font-weight: bolder;">$350</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>$200 - $499</td>
                <td style="color: #46c682; font-weight: bolder;">$355</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>$500 - $999</td>
                <td style="color: #46c682; font-weight: bolder;">$360</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>$1000 - Above</td>
                <td style="color: #46c682; font-weight: bolder;">$360</td>
                </tr>
            </tbody>
        </table>
    </div>
     <hr style="margin-bottom: 50px;">
    <div class="buying-rate">
        <h3>PayPal  Rate</h3>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Amount</th>
                <th scope="col">Rates</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>$100 - $199</td>
                <td style="color: #46c682; font-weight: bolder;">$250</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>$200 - Above</td>
                <td style="color: #46c682; font-weight: bolder;">$260</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection