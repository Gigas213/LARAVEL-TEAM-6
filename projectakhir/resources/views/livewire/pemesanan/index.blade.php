<div>
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Product</h3>
              <div>
                <form  class="row g-3 mt-3" wire:submit.prevent="submit">
                  
                    <div class="col-12 mb-3">
                      @if (session()->has('message'))
                        <div class="alert alert-success">
                        {{ session('message') }}
                      </div>
                      @endif
                      <select class="form-control form-control-lg" wire:model="product" required>
                        <option>-- Pilih Product --</option>
                        @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->nama_product }}</option>
                        @endforeach
                      </select>
                      <br>
                      <br>
                      <br>
                      <br>
                      <button type="submit" class="btn btn-primary w-100">submit</button>
                    </div>
                  </form>
              </div>
              </div>
              </div>
            
            <!-- Light table -->
            <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="h3 mb-0">Chekout</h5>
                      <br>
                      <div class="table-responsive">
                        @if (session()->has('messages'))
                        <div class="alert alert-danger">
                        {{ session('messages') }}
                      </div>
                      @endif
                      
                        <table class="table align-items-center table-flush">
                          <thead >
                            <tr>
                              <th scope="col" >No</th>
                              <th scope="col" >Nama Product</th>
                              <th scope="col" >Qty</th>
                              <th scope="col" >Harga/Qty</th>
                              <th scope="col" style="width:200px;" >Total</th>
                              <th scope="col" class="text-center" style="width:10px;" ></th>
                            </tr>
                          </thead>
                          
                          <tbody>
                            @foreach($transactions as $data)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $data->product->nama_product }}</td>
                                <td>
                                   {{ $data->qty }}
                                </td>
                                <td>
                                  Rp.{{ number_format($data->product->harga_product) }}
                                </td>
                                <td>Rp.{{ number_format($data->product->harga_product*$data->qty) }}</td>
                                <td class="text-center">
                                  <button type="button" wire:click="deleteTransaction({{ $data->id }})"  class="btn btn-danger btn-sm">DELETE</button>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align:right;">Total Pembelian</td>
                            <td>
                              Rp.{{ number_format($transactions->sum('total')) }}
                            </td>
                            <tr>
                              <td style="border:none;"></td>
                              <td style="border:none;"></td>
                              <td style="border:none;"></td>
                              <td style="text-align:right;">Pembayaran</td>
                              <td style="text-align:right;">
                                <input type="text" wire:model="pembayaran" class="form-control">
                              </td>
                            </tr>
                            <tr>
                              <td style="border:none;"></td>
                              <td style="border:none;"></td>
                              <td style="border:none;"></td>
                              <td style="text-align:right;">Kembalian</td>
                              <td style="border:none;">
                                Rp  {{ number_format($pembayaran - $transactions->sum('total')) }} 
                              </td>
                            </tr>
                          </tfoot>
                        </table>
                        <div>
                          <button type="submit" wire:click="save" class="btn btn-success btn-sm float-right">
                            Submit
                          </button>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
      <!-- Footer -->

    </div>
</div>
