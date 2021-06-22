using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ObjectPool
{
    class Chicken : IPoolObject
    {
        public void Move()
        {
            Console.WriteLine("Moves by walking.");
        }
    }
}
