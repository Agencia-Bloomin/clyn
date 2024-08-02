<?php $this->layout("_theme"); ?>

<section class="dash_content_app">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle"><?= $title ?></h2>
    </header>

    <div class="dash_content_app_box">

        <form id="prodForm" class="app_form" action="<?= $formAction ?>" method="post" enctype="multipart/form-data">
            <label class="label">
                <span class="legend">*Título:</span>
                <input type="text" name="name" placeholder="O Título do seu produto" value="<?= $product->name; ?>" required />
            </label>

            <?php if (URL_PRODUTO) : ?>
                <label id="urlContainer" class="label">
                    <span class="legend">URL:</span>
                    <input id="inputUrl" type="text" name="url" placeholder="Url do produto" value="<?= $product->url; ?>" />
                </label>
            <?php endif; ?>


            <label class="label">
                <span class="legend">Capa: (1920x1080px)</span>
                <input type="file" name="cover" placeholder="Uma imagem de capa" />
            </label>
            <?php if ($product->cover) : ?>
                <table class='table tableCover'>
                    <thead>
                        <tr>
                            <td>
                                Imagem
                            </td>
                            <td>
                                Ação
                            </td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <img src="<?= url("$product->cover"); ?>">
                            </td>
                            <td>
                                <a class="icon-trash-o btn btn-red" href="#" onclick="atualizarBanco()">Deletar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>

            <label class="label">
                <span class="legend">*Conteúdo:</span>
                <textarea class="mce" name="content"><?= $product->content; ?></textarea>
            </label>

            <?php if (PDF_PRODUTO) : ?>

                <label class="label">
                    <span class="legend">PDF:</span>
                    <input type="file" name="pdf" placeholder="PDF do produto" />
                </label>

            <?php endif; ?>

            <div class="label_g2">
                <label class="label">
                    <span class="legend">*Categoria:</span>

                    <?php
                    $prodCountCats = explode(",", $product->category_id);
                    if (count($prodCountCats) > 0) : ?>
                        <input id="categoryId" type="hidden" name="category_id">
                        <?php foreach ($prodCountCats as $key => $catFatherId) :
                        ?>
                            <select data-select="categoryId" required>
                                <option <?= $key == 0 ? "disabled" : "" ?> selected><?= $key == 0 ? "Selecione uma Categoria" : "Remover categoria" ?></option>
                                <?php foreach ($treeSortCategories as $category) : ?>
                                    <option value="<?= $category->id; ?>" <?= $catFatherId == $category->id ? "selected" : "" ?>><?= $category->indentation; ?><?= $category->name; ?></option>
                                <?php endforeach; ?>
                            </select>

                        <?php endforeach; ?>
                    <?php endif; ?>
                    <span id="newSelectContainer"></span>
                    <div class="btnAddCat"><a href="javascript:void(0)" onclick="adicionarSelect()">Add Categoria</a></div>
                </label>

                <label class="label">
                    <span class="legend">*Status:</span>
                    <select name="status" required>
                        <option value="post" <?= $product->status == "post" ? "selected" : "" ?>>Publicar</option>
                        <option value="draft" <?= $product->status == "draft" ? "selected" : "" ?>>Rascunho</option>
                        <option value="trash" <?= $product->status == "trash" ? "selected" : "" ?>>Lixo</option>
                    </select>
                </label>

            </div>


            <div class="al-right">
                <?php if (!empty($idButton)) : ?>
                    <a id="goGalleryBtn" class="btn btn-green icon-check-square-o mr-3" href="<?= $idButton ?>">Galeria</a>
                <?php endif; ?>
                <input type="hidden" name="type" value="<?= $type ?>">
                <button id="saveBtn" class="btn btn-green icon-check-square-o getSelectedValues">Salvar</button>
            </div>
        </form>
    </div>
</section>

<?php
// Cria um objeto da lista de array existentes compativel com JS.
$urlArrayList = [];
if (!empty($allUrls)) {
    foreach ($allUrls as $url) {
        array_push($urlArrayList, $url->url);
    }
    $arrayListEncod = json_encode($urlArrayList);
}
?>

<?php $this->start("scripts"); ?>
<script>
    var getSelectedValues = document.getElementsByClassName('getSelectedValues');
    if (getSelectedValues) {
        getSelectedValues[0].addEventListener('click', function getSelectedValues() {
            var selects = document.querySelectorAll('[data-select="categoryId"]');

            var selectedValues = [];

            selects.forEach((select) => {
                var selectedOption = select.options[select.selectedIndex];
                if (!isNaN(selectedOption.value)) {
                    selectedValues.push(selectedOption.value);
                }
                if (isNaN(selectedOption.value)) {
                    return false;
                };
            });


            var concatenatedValues = selectedValues.join(',');
            document.getElementById('categoryId').value = concatenatedValues;
        })
    }



    function adicionarSelect() {
        var originalSelect = document.querySelector('[data-select="categoryId"]'),
            originalOptions = originalSelect.querySelectorAll('option'),

            newSelectContainer = document.getElementById("newSelectContainer"),
            novoSelect = document.createElement("select"),
            option = document.createElement("option");

        novoSelect.setAttribute('data-select', 'categoryId');
        // novoSelect.setAttribute('required', '');

        for (let i = 0; i < originalOptions.length; i++) {
            if (i == 0) {
                var option = document.createElement("option");
                option.text = "Remover categoria";
                option.setAttribute('selected', '')
                novoSelect.appendChild(option);
            } else {
                var option = document.createElement("option");
                option.text = originalOptions[i].innerHTML;
                option.value = originalOptions[i].value;
                novoSelect.appendChild(option);
            }

        }
        newSelectContainer.appendChild(novoSelect);
    }


    <?php if ($type === "edit") : ?>

        function atualizarBanco() {
            var confirmado = confirm('Atenção! Você tem certeza que quer realizar essa tarefa?');
            if (confirmado) {
                $.ajax({
                    url: "<?= url("produtos/imagem/{$product->id}"); ?>",
                    method: "POST",
                    success: function(response) {
                        console.log(response);
                        console.log("Dados atualizados com sucesso!");
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.log("Erro ao atualizar os dados: " + error);
                    }
                });
            }
        }
    <?php endif; ?>

    // Verificação de dupliciade de URL start
    const inputUrl = document.getElementById('inputUrl');
    let urlList = <?= !empty($arrayListEncod) ? $arrayListEncod : "[]"; ?>;

    if (inputUrl) {
        function checkUrlDuplicity() {
            for (let key in urlList) {
                const avisoExiste = document.getElementById('avisoUrl');
                if (avisoExiste) {
                    avisoExiste.remove();
                }
                if (urlList.hasOwnProperty(key)) {
                    if (urlList[key].trim() == inputUrl.value.trim()) {
                        const urlContainer = document.getElementById('urlContainer');
                        const referencia = document.getElementById('inputUrl');
                        const aviso = document.createElement('span');
                        aviso.textContent = "Url já existente! Salve para substituir";
                        aviso.setAttribute('id', "avisoUrl")
                        aviso.setAttribute('style', "color: red")
                        urlContainer.insertBefore(aviso, referencia)
                        return false
                    }
                }
            }
        }

        inputUrl.addEventListener('change', checkUrlDuplicity);
    }
    // Verificação de dupliciade de URL end
</script>

<?php $this->stop(); ?>