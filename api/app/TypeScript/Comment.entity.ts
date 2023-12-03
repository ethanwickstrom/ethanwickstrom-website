
/**
* Homeflow Technologies | CommentEntity.
*
* @property user_id
* @property commentable_id
* @property commentable_type
* @property content
*
* @create CommentEntity
*/

export interface CommentEntity {
  commentable_id: number;
  commentable_type: string;
  content: string;
}

