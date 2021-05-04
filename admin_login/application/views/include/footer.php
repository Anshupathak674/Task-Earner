<footer class="footer text-center">
© InfoTech Pvt. Ltd. 2021. All Rights Reserved
</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url() ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url() ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url() ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="<?= base_url() ?>dist/js/app.min.js"></script>
<script src="<?= base_url() ?>dist/js/app.init.js"></script>
<script src="<?= base_url() ?>dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url() ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url() ?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url() ?>dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url() ?>dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url() ?>dist/js/custom.min.js"></script>
<!--This page plugins -->
<script src="<?= base_url() ?>assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="<?= base_url() ?>dist/js/pages/datatable/datatable-basic.init.js"></script>

<script src="<?= base_url() ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url() ?>dist/js/pages/forms/select2/select2.init.js"></script>

    <script src="<?= base_url() ?>assets/extra-libs/prism/prism.js"></script>

    <script src="<?= base_url() ?>assets/libs/summernote/dist/summernote-bs4.min.js"></script>
    <script>
    /************************************/
    //default editor
    /************************************/
    $('.summernote').summernote({
        height: 350, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
    });

    /************************************/
    //inline-editor
    /************************************/
    $('.inline-editor').summernote({
        airMode: true
    });

    /************************************/
    //edit and save mode
    /************************************/
    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }

    var edit = function() {
        $('.click2edit').summernote({ focus: true });
    };

    var save = function() {
        var markup = $('.click2edit').summernote('code');
        $('.click2edit').summernote('destroy');
    };

    /************************************/
    //airmode editor
    /************************************/
    $('.airmode-summer').summernote({
        airMode: true
    });
    </script>
	<script defer src="https://widget-js.cometchat.io/v2/cometchatwidget.js"></script>

    
<?php if($this->session->userdata('admin_login_id')){ ?>
	<script>
	window.addEventListener('DOMContentLoaded', (event) => {
		CometChatWidget.init({
			"appID": "313555def95f414",
			"appRegion": "us",
			"authKey": "20c46ce3a729f5ffe07899527afda0cd7588a56d"
		}).then(response => {
			console.log("Initialization completed successfully");


			// 			// OPTIONAL
			CometChatWidget.createOrUpdateUser({
			  "uid": "site_owner1", 
			  "name": "<?= $this->session->userdata('admin_name') ?>"
			//  "roles": "user"
			});

			CometChatWidget.login({
				"uid": "site_owner1"
			}).then(response => {
			

				CometChatWidget.launch({
					"widgetID": "ab6aa584-f178-4ca4-9e2f-b11b1d3fd4d2",
					"docked": "true",
					"alignment": "right", //left or right
					"roundedCorners": "true",
					"height": "450px",
					"width": "400px",
					// "defaultID": 'kush', //default UID (user) or GUID (group) to show,
				});

			



			}, error => {
				console.log("User login failed with error:", error);
				//Check the reason for error and take appropriate action.
			});
		}, error => {
			console.log("Initialization failed with error:", error);
			//Check the reason for error and take appropriate action.
		});


	});
</script>
<script>
$(".commet").click(function() {
		var uid = $(this).data("uid");
        
		CometChatWidget.openOrCloseChat(true);
		CometChatWidget.chatWithUser(uid);
	});
</script>

<?php } ?>

</body>

</html>