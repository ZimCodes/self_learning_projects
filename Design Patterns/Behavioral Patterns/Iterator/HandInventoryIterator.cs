using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Iterator
{
    class HandInventoryIterator : IInventoryIterator<Item>
    {
        private int itemindex = 0;
        private HandInventory handInventory;
        public HandInventoryIterator(HandInventory hand)
        {
            handInventory = hand;
        }
        public Item Current()
        {
            switch (itemindex)
            {
                case 0:
                    return this.handInventory.Right;
                case 1:
                    return this.handInventory.Left;
                default:
                    break;
            }
            return null;
        }

        public bool IsDone()
        {
            return itemindex < 2;
        }

        public void Next()
        {
            itemindex++;
        }
    }
}
