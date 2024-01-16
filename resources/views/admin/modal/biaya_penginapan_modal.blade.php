<div class="modal fade" id="modalBiayaPenginapan" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1250px;">
      <div class="modal-content">
          <div class="p-3 text-center">
            <h5 class="modal-title" id="exampleModalLabel">Peraturan Gubernur Jawa Timur</h5>
            <span>Nomor : 14 Tahun 2021</span>
            <br>
            <span><b>Perkiraan Biaya Penginapan Berdasarkan Tarif Rata - Rata Hotel</b></span>
          </div>
          <div class="modal-body">
            Luar Wilayah Jawa Timur
            <div class="table-responsive">
              <table class="table table-bordered overflow-auto" id="table_biaya_penginapan" style="display:block; width: 100%;">
                  <thead class="d-block w-100">
                      <tr class="d-flex w-100">
                        <th class="w-50">PROVINSI</th>
                        <th class="w-50">SATUAN</th>
                        <th class="w-50">TINGKATAN A, <br> Pejabat Eselon II</th>
                        <th class="w-50">TINGKATAN B, <br> Pejabat Eselon III/Golongan IV </th>
                        <th class="w-50">TINGKATAN C, <br> Pejabat Eselon IV/Golongan III </th>
                        <th class="w-50">TINGKATAN D, <br> Golongan I/II </th>
                      </tr>
                  </thead>
                  <tbody class="w-100 d-block">
                    @php
                        $biayahotel = DB::table('biaya_hotel')->get();
                    @endphp
                    @foreach ($biayahotel as $item)
                      <tr class="d-flex w-100">
                          <td class="w-50">{{ $item->provinsi }}</td>
                          <td class="w-50">{{ $item->satuan }}</td>
                          <td class="w-50">{{ $item->tarif_a}}</td>
                          <td class="w-50">{{ $item->tarif_b}}</td>
                          <td class="w-50">{{ $item->tarif_c}}</td>
                          <td class="w-50">{{ $item->tarif_d}}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
      </div>
    </div>
</div>

