Yii2 Widgets - URL Active
============================

These two simple widgets provide a simple way to have both \yii\widgets\Menu and \yii\bootstrap\Nav active state depend on more than the url it is set to. We accomplish this by adding an Array of other possible url patterns that it should check against.  If you look at either Menu.php or Nav.php the code is pretty simple.


An Example of using this wartron\yii2widgets\urlactive\Nav widget instead of the stock for basic crud is that all the crud urls will keep the menu items state to active.

    echo Nav::widget([
        'items' =>  [
            [
                'label'     => 'Gizmos',
                'url'       => ['/crud/gizmo/index'],
                'urlActive' => [
                    ['/crud/gizmo/view'],
                    ['/crud/gizmo/update'],
                    ['/crud/gizmo/create'],
                ]
            ],
        ]
    ]);