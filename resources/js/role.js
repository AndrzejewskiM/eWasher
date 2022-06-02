// Wczytanie datatebles do pliku
$('#table').DataTable({
  "pagingType": "full_numbers",
  "dom": '<"top"lf>rt<"bottom"ip><"clear">',
  buttons: [
        'copy', 'csv', 'excelHtml5'
    ],
    "language": {
    "processing":     "Przetwarzanie...",
    "search":         "Szukaj:",
    "lengthMenu":     "Pokaż _MENU_ pozycji",
    "info":           "Pozycje od _START_ do _END_ z _TOTAL_ łącznie",
    "infoEmpty":      "Pozycji 0 z 0 dostępnych",
    "infoFiltered":   "(filtrowanie spośród _MAX_ dostępnych pozycji)",
    "infoPostFix":    "",
    "loadingRecords": "Wczytywanie...",
    "zeroRecords":    "Nie znaleziono pasujących pozycji",
    "emptyTable":     "Brak danych",
    "paginate": {
        "first":      "Pierwsza",
        "previous":   "Poprzednia",
        "next":       "Następna",
        "last":       "Ostatnia"
    },
    "aria": {
        "sortAscending": ": aktywuj, by posortować kolumnę rosnąco",
        "sortDescending": ": aktywuj, by posortować kolumnę malejąco"
    }
}
});


$('.btn-delete').click(function() {
    var address = this.dataset.url;
    swal({
      title: 'Czy jesteś pewien?',
      text: "Aby usunąć dane klienta , nie może on posiadać żadnych zleceń!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Tak, usuń!'
    }).then(function(effect){
      if (typeof effect.dismiss == 'undefined') {
        window.location.replace(address);
      }
  });
});
