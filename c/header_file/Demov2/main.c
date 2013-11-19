#include "include/linkedlist.h"

int 
main(void)
{
	NODE *p_root = NULL;
	int del_val;

	p_root = creat_list(); /*创建一个非循环单链表，返回根指针*/
	traverse_linkedlist(p_root);	/*遍历链表*/
	
	/*从小到大排序*/
	printf("排序后的值：\n");
	sll_sel_sort(p_root);
	traverse_linkedlist(p_root);

	/*插入新结点*/
	if (0 == sll_insert(&p_root, 19))
	{
		printf("插入节点失败，请重试！");
	}

	printf("插入后的链表");
	traverse_linkedlist(p_root);

	printf("现在节点个数为:%d\n", sll_count_nodes(p_root));
	
	/*删除节点*/
	if (sll_remove(&p_root, p_root->link->link, &del_val))
	{
		printf("删除节点成功，被删除的节点的值为：%d\n", del_val);
	}
	
	printf("删除后的链表为：\n");
	traverse_linkedlist(p_root);

	free(p_root);
	return 0;
}