<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It is a breeze. Simply tell Lumen the URIs it should respond to
  | and give it the Closure to call when that URI is requested.
  |
 */

//$router->get('package/getfaq', 'FaqController@index');
// FAQ
$router->get('faq/list', ['as' => 'faq.index', 'uses' => 'FaqController@index']);
$router->get('faq/show/{id}', ['as' => 'faq.show', 'uses' => 'FaqController@show']);
$router->post('faq/create', ['as' => 'faq.create', 'uses' => 'FaqController@store']);
$router->delete('faq/delete/{id}', ['as' => 'faq.delete', 'uses' => 'FaqController@destroy']);
$router->put('faq/update/{id}', ['as' => 'faq.update', 'uses' => 'FaqController@update']);
$router->put('faq/change_status', ['as' => 'faq.status', 'uses' => 'FaqController@changeStatus']);

// Front end public APIs
$router->get('faq_topic/list', ['as' => 'faq_topic.index', 'uses' => 'FaqController@faqTopicList']);
$router->get('faqs/{faqTopicSlug}', ['as' => 'faqs.list', 'uses' => 'FaqController@getAllFaqsByFaqTopic']);
