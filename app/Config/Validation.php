<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
	
	

    public $tk = [
		'nama'     				        => 'required',
		'jenis_kelamin'           => 'required',
		'tanggal_lahir'    => 'required',
		'alamat'   		            => 'required',
		'agama'   		            => 'required',
		'tahun_ajaran'        		=> 'required',
	];

	public $tk_errors = [
		'nama'      	    => [
			'required'			=> 'Nama  Required,  Tidak Boleh Kosong'
		],
		'jenis_kelamin'   => [
			'required'			=> 'Jenis Kelamin Required, Tidak Boleh Kosong'
    ],
      'tanggal_lahir'  => [
			'required'			=> ' Tanggal Lahir Required, Tidak Boleh Kosong'
		],
      'alamat'   		  => [
			'required'			=> 'Alamat Required, Tidak Boleh Kosong'
		],
      'agama'   		  => [
			'required'			=> 'Agama Required, Tidak Boleh Kosong'
		],
      'tahun_ajaran'  => [
			'required'			=> 'Tahun Ajaran Required, Tidak Boleh Kosong'
		]
	];

	// validasi untuk  setiap field yang ada di base
	public $users = [
		'nama_user'			=> 'required',
		'username'     	=> 'required',
		'password'     	=> 'required',
		'level'   			=> 'required',

	];

	public $users_errors = [

		'nama_user'     => [
			'required'		=> 'Nama Users Required ,Tidak Boleh Kosong'
		],
		'username'     	=> [
			'required'		=> 'Username Required ,Tidak Boleh Kosong'
		],
		'password'   		=> [
			'required'		=> 'Password Required ,Tidak Boleh Kosong'
		],
		'level'   			=>  [
			'required'		=> 'Level Users Required ,Tidak Boleh Kosong'
		]
	];


    public $pendaftaran = [
		'nama'     				      => 'required',
		'jenis_kelamin'         => 'required',
		'tanggal_lahir'  => 'required',
		'alamat'   		          => 'required',
		'agama'   		          => 'required',
		'tahun_ajaran'   		    => 'required',
	];

	public $pendaftaran_errors = [
    'nama'      	    => [
			'required'			=> 'Nama  Required,  Tidak Boleh Kosong'
		],
		'jenis_kelamin'   => [
			'required'			=> 'Jenis Kelamin Required, Tidak Boleh Kosong'
    ],
      'tanggal_lahir'  => [
			'required'			=> 'Tanggal Lahir Required, Tidak Boleh Kosong'
		],
      'alamat'   		  => [
			'required'			=> 'Alamat Required, Tidak Boleh Kosong'
		],
      'agama'   		  => [
			'required'			=> 'Agama Required, Tidak Boleh Kosong'
		],
      'tahun_ajaran'  => [
			'required'			=> 'Tahun Ajaran Required, Tidak Boleh Kosong'
		]
	];
}
