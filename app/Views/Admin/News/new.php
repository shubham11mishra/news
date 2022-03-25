<?= $this->extend('./layouts/frontlayout.php') ?>

<?= $this->section('title') ?>
Add New News
<?= $this->endSection() ?>

<?= $this->section('body') ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?= form_open(base_url('news/create'), ["id" => "news-form"]) ?>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">News</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">

                <select id="choices-multiple-remove-button" name="tags[]" multiple="multiple" class="form-control" placeholder="Select upto 5 tags" multiple>
                    <option value="1">HTML</option>
                    <option value="2">Jquery</option>
                    <option value="3">CSS</option>
                    <option value="4">Bootstrap 3</option>
                    <option value="5">Bootstrap 4</option>
                    <option value="6">Java</option>
                    <option value="7">Javascript</option>
                    <option value="8">Angular</option>
                    <option value="9">Python</option>
                    <option value="10">Hybris</option>
                    <option value="11">SQL</option>
                    <option value="12">NOSQL</option>
                    <option value="13">NodeJS</option>
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Add   <div class="loader">Loading...</div></button>
              
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,

            searchResultLimit: 5,
            renderChoiceLimit: 5,
            searchEnabled: true,
            searchChoices: true,
            searchFloor: 1,
            searchResultLimit: 4,
        });


        //ajax request to add news
        $("#news-form").submit(function(e) {
            e.preventDefault();
            const form = $(this);
            const url = form.action
            $.ajax({
                url: '<?= base_url('admin/newsadmin/test') ?>',
                method: 'POST',
                data: form.serialize(),
                beforeSend: function() {
                    // setting a timeout
                    console.log("befor send");
                },
                success: function(data) {
                    console.log("success", data);
                },
                error: function(xhr) { // if error occured
                    console.log("error", xhr);

                },
                complete: function() {
                    console.log('complete');
                },

            });
        });


    });
    let choiceBox = document.getElementById('choices-multiple-remove-button');
    choiceBox.onchange = () => {
        console.log(choiceBox.options);
        let selected = [];
        for (let option of choiceBox.options) {
            if (option.selected) {
                selected.push(option.value);
            }
        }
        // console.log(selected)
    };
</script>
<?= $this->endSection() ?>