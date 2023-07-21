<?php

namespace console\controllers;
use Yii;
use yii\db\Query;
use yii\console\Exception;
use frontend\models\Key;
use frontend\models\Message;
use \AmoCRM\Client;

class SendAmoController extends \yii\console\Controller
{
    protected function SendAmo()
    {
        try {
            $key = Key::find()->where(['id' => 1])->one();

            // Создание клиента
            $subdomain = $key->key;            // Поддомен в амо срм
            $login     = $key->value;            // Логин в амо срм
            $apikey    = $key->content;            // api ключ

            $amo = new Client($subdomain, $login, $apikey);

            $message = Message::find()->where(['id' => $this->message_id])->one();

            // create lead
            $lead = $amo->lead;
            $lead['name'] = 'ГуглГрузия';
            $lead['responsible_user_id'] = 5847651; // ID ответсвенного 
            $lead['pipeline_id'] = 5581734; // ID воронки
            $lead['status_id'] = 49943004; // for check

            $lead['tags'] = ['ГуглГрузия'];

            // $lead->addCustomField(809203, $request->post('name'));

            // $lead->addCustomField(319701, $request->post('phone'));

            // $lead->addCustomField(815608, $request->post('message'));

            // $lead->addCustomField(319703, 'test@test.com');

            $message->status_amo_id = $lead->apiAdd();

            $contact = $amo->contact;
            $contact['name'] = $message->name;
            $contact->addCustomField(171145, [
                [$message->phone, 'WORK'],
            ]);
            $message->status_contact_amo_id = $contact->apiAdd();

            $link = $amo->links;
            $link['from'] = 'leads';
            $link['from_id'] = $message->status_amo_id;
            $link['to'] = 'contacts';
            $link['to_id'] = $message->status_contact_amo_id;

            $message->status_link_amo_id = json_decode($link->apiUnlink(), true);

            $message->save();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}