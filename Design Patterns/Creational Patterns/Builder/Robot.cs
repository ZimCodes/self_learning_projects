using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    class Robot:IProduct
    {
        public string robotHead { get; set; }
        public string robotTorso { get; set; }
        public string robotArms { get; set; }
        public string robotLegs { get; set; }
        public override string ToString()
        {
            return string.Format("{0}, {1}, {2}, {3}",robotHead,robotTorso,robotArms,robotLegs);
        }
    }
}
