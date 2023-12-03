
/**
* Homeflow Technologies | ContactMessagesEntity.
*
* @property name
* @property email
* @property message
* @property status
* @property user_id
* @property handled_by
*
* @create ContactMessagesEntity
*/

export interface ContactMessagesEntity {
  name: string;
  email: string;
  message: string;
  user_id: number;
  handled_by: number;
}

