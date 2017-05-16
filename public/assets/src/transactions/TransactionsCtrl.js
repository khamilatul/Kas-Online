'use strict';

app.controller('TransactionsCtrl', ['$scope', 'transactions', 'SweetAlert','$uibModal','$log', '$http','$timeout', function ($scope, transactions,SweetAlert,$uibModal,$log) {
//urussan tampilan
    $scope.main = {
        page: 1,
        term: ''
    };

    $scope.isLoading = true;
    $scope.isLoaded = false;

    $scope.setLoader = function (status) {
        if (status == true) {
            $scope.isLoading = true;
            $scope.isLoaded = false;
        } else {
            $scope.isLoading = false;
            $scope.isLoaded = true;
        }
    };
    $scope.transactions = function (id) {

        var modalInstance = $uibModal.open({
            templateUrl: 'assets/src/transactions/detail.dialog.html',
            controller: 'Transactionsdetail2Ctrl',
            size: 'lg',
            resolve: {
                item: function () {
                    return id;
                }
            }
        });

        modalInstance.result.then(function (selectedItem) {
            $scope.selected = selectedItem;
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',
        msg: ''
    };
    //refreshData
    $scope.refreshData = function () {
        $scope.main.page = 1;
        $scope.main.term = '';
        $scope.getData();
    };
    // go to print preview page
    $scope.print = function () {
        window.open ('../api/v1/cetak-transactions','_blank');
    };
    //Init dataAkun
    $scope.dataTransactions = '';
    // init get data
    transactions.get($scope.main.page, $scope.main.term)
        .success(function (data) {

            //Change Loading status
            $scope.setLoader(false);

            // result data
            $scope.dataTransactions = data.data;
            // set the current page
            $scope.current_page = data.current_page;

            // set the last page
            $scope.last_page = data.last_page;

            // set the data from
            $scope.from = data.from;

            // set the data until to
            $scope.to = data.to;

            // set the total result data
            $scope.total = data.total;
        })
        .error(function (data, status) {
            // unauthorized
            if (status === 401) {
                //redirect to login
                $scope.redirect();
            }
            console.log(data);
        });

    // get data
    $scope.getData = function () {

        //Start loading
        $scope.setLoader(true);

        transactions.get($scope.main.page, $scope.main.term)
            .success(function (data) {

                //Stop loading
                $scope.setLoader(false);

                // result data
                $scope.dataTransactions = data.data;

                // set the current page
                $scope.current_page = data.current_page;

                // set the last page
                $scope.last_page = data.last_page;

                // set the data from
                $scope.from = data.from;

                // set the data until to
                $scope.to = data.to;

                // set the total result data
                $scope.total = data.total;
            })
            .error(function (data, status) {
                // unauthorized
                if (status === 401) {
                    //redirect to login
                    $scope.redirect();
                }
                console.log(data);
            });
    };

    // Navigasi halaman terakhir
    $scope.lastPage = function () {
        //Disable All Controller
        $scope.main.page = $scope.last_page;
        $scope.getData();
    };

    // Navigasi halaman selanjutnya
    $scope.nextPage = function () {
        // jika page = 1 < halaman terakhir
        if ($scope.main.page < $scope.last_page) {
            // halaman saat ini ditambah increment++
            $scope.main.page++
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman sebelumnya
    $scope.previousPage = function () {
        //Disable All Controller

        // jika page = 1 > 1
        if ($scope.main.page > 1) {
            // page dikurangi decrement --
            $scope.main.page--
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman pertama
    $scope.firstPage = function () {
        //Disable All Controller

        $scope.main.page = 1;

        $scope.getData()
    };

// //hapus lewat tampilan
//     $scope.hapus = function (id) {
//         var confirm = $mdDialog.confirm()
//             .title('Konfirmasi')
//             .content('Apakah Anda yakin ingin menghapus data?')
//             .ok('Hapus')
//             .cancel('Batal')
//             .targetEvent(id);
//         //
//         $mdDialog.show(confirm).then(function () {
//             transactions.destroy(id)
//                 .success(function (data) {
//                     if (data.success == true) {
//                         $scope.showToast('green', 'Data Berhasil Dihapus');
//                     } else {
//                         $scope.showToast('red', data.result.message);
//                     }
//                     $scope.getData();
//                 })
//
//         }, function () {
//
//         });
//     };
    $scope.hapus = function (id) {
        SweetAlert.swal({
            title: "Peringatan?",
            text: "Apakah anda yakin ingin hapus",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Delete!",
            cancelButtonText: "Batal!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                transactions.destroy(id)
                    .success(function (data) {
                        if (data.deleted == true) {
                            SweetAlert.swal({
                                title: "Berhasil!",
                                text: "Data Berhasil Dihapus.",
                                type: "success",
                                confirmButtonColor: "#007AFF"
                            });

                        } else {
                            SweetAlert.swal({
                                title: "Gagal",
                                text: "Data Gagal Dihapus :)",
                                type: "error",
                                confirmButtonColor: "#007AFF"
                            })

                        }
                        $scope.getData();
                    })


            } else {
                SweetAlert.swal({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    type: "error",
                    confirmButtonColor: "#007AFF"
                });
            }
        });
    };


}]);
app.controller('Transactionsdetail2Ctrl', ['$scope', 'transactions', 'SweetAlert', '$uibModal','$log','$uibModalInstance','toaster','item','$http','$timeout', function ($scope, transactions,SweetAlert,$uibModal,$log,$uibModalInstance,toaster,item) {
//urussan tampilan
    $scope.myModel ={}
    
    $scope.isLoading = true;
    $scope.isLoaded = false;

    $scope.setLoader = function (status) {
        if (status == true) {
            $scope.isLoading = true;
            $scope.isLoaded = false;
        } else {
            $scope.isLoading = false;
            $scope.isLoaded = true;
        }
    };
    $scope.id =item
    transactions.show($scope.id)
        .success(function (data) {
            $scope.setLoader(false);
            $scope.myModel = data;
        });

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };


}]);