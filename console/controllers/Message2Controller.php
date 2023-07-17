<?php

namespace console\controllers;
use Yii;
use yii\db\Query;
use yii\console\Exception;

class Message2Controller extends \yii\console\controllers\MessageController
{
    /**
     * Saves messages to database
     *
     * @param array $messages  Это двухмерный массив ключей [[категори]=>[[значение],[...]] ,... ]
     * @param \yii\db\Connection $db
     * @param string $sourceMessageTable Наша таблица для переводов
     * @param string $messageTable  Не используем
     * @param boolean $removeUnused
     * @param array $languages  Это массив языков languages из i18n.php ['ru-RU',...]
     * @param boolean $markUnused
     */
    protected function saveMessagesToDb($messages, $db, $sourceMessageTable, $messageTable, $removeUnused, $languages, $markUnused)
    {
        try{

            $db = Yii::$app->db;
            $tableName = '{{%lg_source_message}}';
            // $tableName = 'rst_lg_source_message';

            // Create an array to hold the batch insert values
            $batchValues = [];
            $message = [];
            // echo var_dump($messages);
            $array = array_unique($messages["frontend"]);
            foreach ($array as $msg) {
                // echo var_dump($message);
                $message['message'] = $msg;
                $message['category'] = 'frontend';
                $batchValues[] = [
                    $message['category'],
                    $message['message'],
                ];
            }

            // Perform batch insert using Yii2's query builder
            $db->createCommand()->batchInsert($tableName, ['category', 'message'], $batchValues)->execute();

            // Delete unused records from the table
            // $usedCategories = array_column($messages, 'category');
            // $query = (new Query())
            //     ->from($tableName)
            //     ->andWhere(['not in', 'category', $usedCategories]);

            // $db->createCommand()->delete($tableName, ['in', 'id', $query])->execute();
        }catch (\Exception $e){
            // echo var_dump($e);
        }
        // try{
            // $pr_iskey=Yii::$app->db->createCommand("SELECT `id`  FROM `gr_dictionary_keys` WHERE `key`=:key");
            // $pr_inskey=Yii::$app->db->createCommand("INSERT INTO `gr_dictionary_keys`( `key`) VALUES (:key)");
            // $pr_delkey=Yii::$app->db->createCommand("DELETE FROM `gr_dictionary_keys` WHERE `id`=:id");

            // $id_lang=[];
            // $pr_l=Yii::$app->db->createCommand("SELECT SQL_NO_CACHE id FROM gr_language WHERE local=:local LIMIT 1");
            // foreach ($languages as $language) {
            //     if(!isset($id_lang[$language])){
            //         $id_language=(int)$pr_l->bindValue(":local", $language,2)->queryScalar();
            //         if(empty($id_language)){
            //             continue;
            //           //  throw new Exception("Unknow lang type $language");
            //         }
            //         $id_lang[$language]=(int)$id_language;
            //     }

            // }

            // if(empty($id_lang))throw new Exception("empty lang");
            // //ALTER TABLE `yii2advanced`.`gr_dictionary` ADD UNIQUE (`language_id`, `key`, `type`);
            // $pr_d=Yii::$app->db->createCommand("INSERT IGNORE INTO `{{%lg_source_message}}`( `category`, `message`) VALUES (:category,:message)");
            // foreach ($messages as  $category => $msgs){
            //     list($type,$key)=explode(":", $category);

            //     if(empty($id=$pr_iskey->bindValue(":key", $key,2)->queryScalar())){
            //         $pr_inskey->bindValue(":key", $key,2)->execute();
            //         $id=Yii::$app->db->lastInsertID;
            //     }

            //     foreach ($id_lang as $id_language) {
            //         $pr_d->bindValue(":category", 'frontend',1)
            //                 ->bindValue(":message", $message,1)
            //                 ->execute();
            //     }
            // }


            // удалить лишние ключи со status=1 (не используемые на страницах)
            // $query=Yii::$app->db->createCommand("SELECT SQL_NO_CACHE dk.`id`,CONCAT(d.`type`,':',dk.`key`) as 'key_' FROM `{{%lg_source_message}}` d,gr_dictionary_keys dk WHERE d.`key`=dk.id AND  status=1")->query();
            //$pr_del=Yii::$app->db->createCommand("DELETE FROM `gr_dictionary` WHERE `key`=:key");
            // while(($data=$query->read())!=false){
            //     if(array_key_exists($data['key_'], $messages)===false){
            //         //$pr_del->bindValue(":key", $data['id'],1)->execute();
            //         $pr_delkey->bindValue(":id", $data['id'],1)->execute();
            //     }
            // }

        //     Yii::$app->db->createCommand("ALTER TABLE {{%lg_source_message}} AUTO_INCREMENT = 1;")->execute();
        // }catch (\Exception $e){
        //    //пишем в лог
        // }
    }
}