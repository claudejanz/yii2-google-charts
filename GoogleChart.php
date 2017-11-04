<?php

namespace claudejanz\googlecharts;

use Yii;
use yii\base\InvalidConfigException;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;

class GoogleChart extends Widget
{

    /**
     * @var array the HTML attributes for the widget container tag.
     * @see Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var string $visualization the type of visualization -ie PieChart
     * @see https://google-developers.appspot.com/chart/interactive/docs/gallery
     */
    public $visualization;

    /**
     * @var string $packages the type of packages, default is corechart
     * @see https://google-developers.appspot.com/chart/interactive/docs/gallery
     */
    public $packages = ['corechart'];  // such as ['orgchart'] and so on.

    /**
     * @var array $data the data to configure visualization
     * @see https://google-developers.appspot.com/chart/interactive/docs/datatables_dataviews#arraytodatatable
     */
    public $data;

    /**
     * @var array $pluginOptions additional configuration options
     * @see https://google-developers.appspot.com/chart/interactive/docs/customizing_charts
     */
    public $pluginOptions = [];

    public function init()
    {
        if (!$this->data) {
            throw new InvalidConfigException("Must have 'data' to be specified.");
        }
        if (!$this->visualization) {
            throw new InvalidConfigException("Must have 'visualization' to be specified.");
        }
        parent::init();
    }

    public function run()
    {
        // set id if not set
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        $id = $this->options['id'];
        // create container
        echo Html::tag('div', null, $this->options);
        $this->registerClientScript($id);
        parent::run();
    }

    public function registerClientScript($id)
    {

        $jsData = Json::encode($this->data);
        $jsOptions = Json::encode($this->pluginOptions);
        $jsPackages = Json::encode($this->packages);
        $view = $this->getView();
        if (!Yii::$app->request->isPjax) {
            $view->registerJsFile('https://www.gstatic.com/charts/loader.js', ['position' => View::POS_HEAD]);
            $view->registerJs("google.charts.load('current', {packages: $jsPackages});", View::POS_HEAD);
        }
        $script = "var $id = new google.visualization.$this->visualization(document.getElementById('$id'));$id.draw( google.visualization.arrayToDataTable($jsData), $jsOptions);";
        $view->registerJs($script, View::POS_LOAD, $id);
    }

}
