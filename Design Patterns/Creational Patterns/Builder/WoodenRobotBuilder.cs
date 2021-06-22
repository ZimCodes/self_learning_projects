using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    class WoodenRobotBuilder : RobotBuilder
    {
        public override void buildRobotArms()
        {
            robot.robotArms = "Wooden Arms";
        }

        public override void buildRobotHead()
        {
            robot.robotHead = "Wooden Head";
        }

        public override void buildRobotLegs()
        {
            robot.robotLegs = "Wooden Legs";
        }

        public override void buildRobotTorso()
        {
            robot.robotTorso = "Wooden Legs";
        }
    }
}
