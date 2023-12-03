
/**
* Homeflow Technologies | ArticleEntity.
*
* @property user_id
* @property category_id
* @property title
* @property content
* @property articleable_id
* @property articleable_type
*
* @create ArticleEntity
*/

export interface ArticleEntity {
  title: string;
  content: string;
  articleable_id: number;
  articleable_type: string;
}

