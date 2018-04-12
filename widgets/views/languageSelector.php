<?php 
    use yii\helpers\Html;
?>

<?php echo Html::beginForm(); ?>
    <div id="language-select">
        <?php 
		
                    echo Html::dropDownList('_lang', $currentLang, $languages,
                        array(
                            'onchange' => 'language_change(this)',
                            'csrf'=>true,
                        )
                    ); 
		
        ?>
        <script type="text/javascript">
        function language_change(selected)
        {
            <?php echo '$.ajax(\''.Yii::$app->getUrlManager()->createUrl("visitor/language")."',".PHP_EOL; 
                    echo "{'type':'post',".PHP_EOL;
                    echo "success : function(data) {window.location.reload();},".PHP_EOL;
                    echo "'data':'_lang='+selected.value+'&YII_CSRF_TOKEN=".Yii::$app->request->csrfToken."',";
            ?>
            }
            );
        }
        </script>
    </div>
<?php echo Html::endForm(); ?>