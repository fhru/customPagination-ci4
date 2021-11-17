# customPagination-ci4

in Pager.php add
    public $templates = [
        'default_full'   => 'CodeIgniter\Pager\Views\default_full',
        'default_simple' => 'CodeIgniter\Pager\Views\default_simple',
        'default_head'   => 'CodeIgniter\Pager\Views\default_head',
        'custom_pager' => 'App\Views\pagers\custom_pagers'
    ];
    
Put the file inside folder views/pagers/
